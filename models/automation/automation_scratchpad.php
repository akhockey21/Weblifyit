<?php

//require_once 'db.php';
require_once 'Services/Twilio.php';

$AccountSid = "ACbb3c4e8db938b277cadbb80bca1ddf87";
$AuthToken = "e79fb3595833bcc67c89e99b67299362";

$client = new Services_Twilio($AccountSid, $AuthToken);

?>
<?php 

//test automation lead notification
$message = $client->account->messages->sendMessage(
		    "4805264296",
		    "9073513079",
		    "Test"
		);
$messagebody = "Hello how are you today. Thank you.";
$phnalert = "9073513079";

        $xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="2">'.$messagebody.'</Say></Gather><Dial timeout="30">'.$phnalert.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
		$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

		try {
			$call = $client->account->calls->create(
			    "4805264296",
			    "$phnalert",
			    $url
			 );
		} catch (Exception $e) {
			// $status = "Unable to call service provider.";
			file_put_contents('call.txt', 'Error: ' . $e->getMessage());
		}

/*


		$message = $client->account->messages->sendMessage(
		    "$twilnumber",
		    "$phone",
		    "$name,\n\rYour local SpeedFixIt partner is: $fn $ln. Please save the contact info.\n\r$fn $ln $adrs $phn"
		);
		
		$message = $client->account->messages->sendMessage(
		    "$twilnumber",
		    "$storesmsnum",
		    "$fn,\n\rYou have a local repair request: $name $email. $phone $brand $device $model $damage"
		);
		
		$message = $client->account->messages->sendMessage(
		    "855-800-2259",
		    "352-459-1298",
		    "New Lead: \n\r $name, $name, $email, $phone, $brand, $device, $model, $damage. Assigned Store: $fn"
		);


		$msg = "You have a new potential customer, name is $name, Device is $device $model, and Damage is $damage, Press 1 to connect to customer.";
		$xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="2">'.$msg.'</Say></Gather><Dial timeout="30" record="true" action="http://sms.speedfixit.com/webhook/rec.php">'.$phone.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
		$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

		try {
			$call = $client->account->calls->create(
			    "$twilnumber",
			    $phn,
			    $url
			 );
		} catch (Exception $e) {
			// $status = "Unable to call service provider.";
			file_put_contents('call.txt', 'Error: ' . $e->getMessage());
		}

	} else {
		$status = "no tech";
		$message = $client->account->messages->sendMessage(
		    "855-800-2259",
		    "$phone",
		    "Hello $name,\n\rWe do not currently have a tech in your area. We will very soon. Sorry for the inconvenience.\n\rThanks,\n\rSpeedFixIt.com"
		);
		
		$message = $client->account->messages->sendMessage(
		    "855-800-2259",
		    "352-459-1298",
		    "New Lead With No Assigned Store: \n\r $name, $name, $email, $phone, $brand, $device, $model, $damage, $zip."
		);

		sendEmail($email, $name, $html_not, $mandrill);
	}
} else {
	$status = "Database Error";
}

echo $status;
*/
?>