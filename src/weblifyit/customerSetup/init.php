<?php
/**
 * This class is used to:
 * * Fully Intergrate Billing and Domain API Into One
 * * Setup Apache Virtual Hosts
 */ 

//Include APIs
require('src/namecheap/namecheap.php');
require('src/stripe/init.php');


/**
 * Steps In Order:
 * - Check If Domain Is available
 *   - If not, return true or false
 * - If Coupon Function
 *   - If coupon has been entered
 *     - Check if valid
 *     - create a session variable with it
 * - Payment function
 *   - Creates customer in stripe API
 *   - Attaches customer to the correct product plan, and coupon if one
 *   - sent response if payment works, if good, call the domain function
 * - Domain function
 *   - Register Domain
 *   - Setup DNS
 *   - Call Apache Function
 * - Apache Function
 *   - Create an apache virtual host to the path of the user.
 */ 

class customerSetup {
    var $userId;
    var $pathToWebsite;
    var $uniqueDomainId;
    var $customerId;
    var $customerInformation;
    var $billingInfo;
    var $domainInfo;
    var $domainAPI;
    var $paymentAPI;
    var $domain;
    //Array with variables of random stuff needed like the coupon code
    var $extra;
    
    /**
     * Establish $pathToWebsite and $userId;
     * Establish Connections With The Billing and Domain APIs;
     * @param {int} $userId 
     */ 
    function __construct($userId){
        $this->userId = $userId;
        $this->customerInformation = array();
        $this->domain = 'thisisatest123fg.com';
        $uniqueDomainId = WebsiteSettings::get($userId, 'website_path', true);
        if (!$uniqueDomainId) {
            $uniqueDomainId = uniqid();
            WebsiteSettings::update($userId, 'website_path', $uniqueDomainId);
}
        $this->pathToWebsite = "userwebsites/web/$uniqueDomainId/";
        $this->uniqueDomainId = $uniqueDomainId;
        
        /**
         * First Domain API Config
         */ 
        $nc_api = array('api_user' =>'akhockey21',
                        'api_key' =>'396b1f1a07764a19b4970439f0dcacff',
                        'api_ip' =>'detect'
	    );
        $sandbox ='true'; // use the Namecheap sandbox to test
        $this->domainAPI = new Namecheap( $nc_api, $sandbox );
        
        /**
         * Payment API Config
         */
        $this->paymentAPI = \Stripe\Stripe::setApiKey('sk_test_DBKvHRq1F3oiTwL9Y2H6nHRP');
    }
    
    /**
     * Calls in the domain APIS to check if the domain exists
     * @param {string or array} $domainInput 
     */ 
    function checkDomain($domainInput){
        return $domainAPI->domainsCheck($domainInput);
    }
    
    /**
     * Check if coupon is valid, if so, add it to session variable.
     * 1. Check if valid, if so, Set Session Variable
     * 2. Return all the info to the user that is needed now, including setting the session variables for those responses.
     * @param {string} $couponInput 
     */ 
    function coupon($couponInput){
        $testCoupon = \Stripe\Coupon::retrieve("$couponCode");
        
        if($testCoupon['valid'] == true){
            $_SESSION["couponcode"] = $testCoupon['id'];
            $_SESSION["percent_off"] = $testCoupon['percent_off'];
            $_SESSION["amount_off"] = $testCoupon['amount_off'];
            
            $returnCouponArray = array();
            $returnCouponArray["couponcode"] = $testCoupon['id'];
            $returnCouponArray["percent_off"] = $testCoupon['percent_off'];
            $returnCouponArray["amount_off"] = $testCoupon['amount_off'];
            
            return $returnCouponArray;
        }else{
            return false;
        }
    }

    /**
     * This gathers all the information, creates the correct array, then creates the customer with the API
     * @param {array} $billingInfo 
     * @param {int} $productId 
     * @param {string} $coupon 
     */ 
    private function createCustomer($billingInfo, $productId, $coupon){
        
        $billingInfo['coupon'] = "$coupon";
        $billingInfo['plan'] = "$productId";
          
        $returnCreateCustomerValue = \Stripe\Customer::create($billingInfo);
        
        return($returnCreateCustomerValue);
    }
    
    /**
     * The customer's stripe ID.
     * @param {string} $customerIdInput 
     */ 
    private function getCustomerId($customerIdInput){
        return(\Stripe\Customer::retrieve($customerIdInput));
    }
    
    /**
     * Simply registers the domain, and calls Nameserver and DNS functions
     * @param {array} $registrationData 
     */ 
    private function registerDomain($registrationData){
        //get domain name from database
        
        //create domain
        if ( ! $this->domainAPI->domainsCreate($this->domain, $registrationData ) ) {
            return($this->domainAPI->Error);
        }
    }
    
    /**
     * Simply sets the websites nameservers as namecheaps default
     * @param {string} $domain 
     */ 
    private function createNameServers(){
        if ( ! $this->domainAPI->dnsSetDefault($this->domain)){
            return($this->domainAPI->Error);
        }
        
    }
    
    /**
     * Sets the DNS of the newly created website
     * and points it at our servers
     * @param {string} $domain 
     */ 
    private function setAsWeblifyitHost(){
        $data = array(
            'HostName' => '@',
            'RecordType' => 'A',
            'Address' => '104.236.61.190'
        );
        $test = $this->domainAPI->dnsSetHosts($this->domain, $data);
        
    }
    
    
    
    
    /**
     * This is the main function that connects everything, called by the user
     * @param {array} $billingInfo 
     * @param {int} $productId 
     * @param {array} $coupon 
     */ 
    function weblifyitSale($billingInfo, $productId, $coupon, $registrationData){
        
        // 1. Get customer ID, returns false or true
        // 2. Prepare the new/update customer array
        // 3. Check if coupon, add code to array if valid
        // 4. Aadd product plan to array
        
        //If customer ID Exists, get the info
        if(WebsiteSettings::get($this->userId, 'customer_id', true) == true){
           $this->customerInformation = $this->getCustomerId(WebsiteSettings::get($this->userId, 'customer_id', true));
            
            $this->customerId = $this->customerInformation['id'];
        }
        else{
            //Create the customer, using the customer info data
            $createCustomerResponse = $this->createCustomer($billingInfo, $productId, $coupon);
            //update database
            WebsiteSettings::update($this->userId, 'customer_id', $createCustomerResponse['id']);
            //
           $this->customerInformation = $this->getCustomerId($createCustomerResponse['id']);
        }
        
        /**
         * Now that the billing is created, we need to deal with the domain aspect and APIs
         */ 
        //1. Create verification function
        
        //2. Register Domain
        $domainRegisterError = $this->registerDomain($registrationData);
        //3. Setup DNS
        $this->createNameServers();
        //4. Call Apache Function
        $this->setAsWeblifyitHost();
    }
    
}
