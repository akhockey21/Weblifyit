<?php

require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
$display_mediaAdder = false;
require 'src/weblifyit/customerSetup/init.php';


            $completeBillingArray = array(
            "email" => Auth::user()->email,
            "trial_end" => strtotime("+1 month"),
            "source" => array(
                'object' => 'card',
                'number' => '4242424242424242',
                'exp_month' => '10',
                'exp_year' => '2016',
                'cvc' => '123',
                'name' => 'Brandon Howard'
            )
        );

$registration_data = array(
   'Years' =>'1',
   'RegistrantFirstName' =>'Brandon',
   'RegistrantLastName' =>'Howard',
   'RegistrantAddress1' =>'3400 cherry st',
   'RegistrantCity' =>'anchorage',
   'RegistrantStateProvince' =>'AK',
   'RegistrantPostalCode' =>'99504',
   'RegistrantCountry' =>'USA',
   'RegistrantPhone' =>'+1.9073513079',
   'RegistrantEmailAddress' =>'akhockey21@live.com',
   'TechFirstName' =>'Brandon',
   'TechLastName' =>'Howard',
   'TechAddress1' =>'3400 cherry st',
   'TechCity' =>'anchorage',
   'TechStateProvince' =>'AK',
   'TechPostalCode' =>'99504',
   'TechCountry' =>'USA',
   'TechPhone' =>'+1.9073513079',
   'TechEmailAddress' =>'akhockey21@live.com',
   'AdminFirstName' =>'Brandon',
   'AdminLastName' =>'Howard',
   'AdminAddress1' =>'3400 cherry st',
   'AdminCity' =>'anchorage',
   'AdminStateProvince' =>'AK',
   'AdminPostalCode' =>'99504',
   'AdminCountry' =>'USA',
   'AdminPhone' =>'+1.9073513079',
   'AdminEmailAddress' =>'akhockey21@live.com',
   'AuxBillingFirstName' =>'Brandon',
   'AuxBillingLastName' =>'Howard',
   'AuxBillingAddress1' =>'anchorage',
   'AuxBillingCity' =>'3400 cherry st',
   'AuxBillingStateProvince' =>'AK',
   'AuxBillingPostalCode' =>'99504',
   'AuxBillingCountry' =>'USA',
   'AuxBillingPhone' =>'+1.9073513079',
   'AuxBillingEmailAddress' =>'akhockey21@live.co'
);

$setup = new customerSetup($user);
$returnData = $setup->weblifyitSale($completeBillingArray, 3, '1', $registration_data);

?>