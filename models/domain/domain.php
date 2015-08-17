<?php
/**
 * THis is the main domain file
 */ 

include_once('src/namecheap/namecheap.php' );
$nc_api = array('api_user' =>'akhockey21',
		'api_key' =>'396b1f1a07764a19b4970439f0dcacff',
		'api_ip' =>'detect'
	);
$sandbox ='true'; // use the Namecheap sandbox to test

$nc = new Namecheap( $nc_api, $sandbox );
if ( $nc->domainsCheck('weblifyit.com' ) ) {
    echo "<p>weblifyit.com is available!</p>";

}else{

    echo "<p>weblifyit.com is NOT available!</p>";

}
/*

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

// registering a domain requires an awful lof of mandatory data:
// http://developer.namecheap.com/docs/doku.php?id=api-reference:domains:create
// stick all that in an associative array
if ( ! $nc->domainsCreate('example23432rsdffsd234.com', $registration_data ) ) {
	print_r( $nc->Error );
}
*/

?>