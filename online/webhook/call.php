<?php

require_once 'Services/Twilio.php';

$AccountSid = "AC8e22829bc180d722010b0ebfd81917b5";
$AuthToken = "75009718bf4c3aa27fb289e837f24ed4";

$client = new Services_Twilio($AccountSid, $AuthToken);

$msg = "You have a new potential customer, name is Moin, Device is LG, and Damage is Screen, 1 to connect to customer.";

$xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="3">'.$msg.'</Say></Gather><Dial timeout="30" record="true" action="http://sms.speedfixit.com/webhook/rec.php">3524591298</Dial><Say>We are sorry. There was a problem.</Say></Response>';
 // echo $xml;
$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

try {

        $call = $client->account->calls->create(
            "855-800-2259",
            '352-429-9951',
            $url
            );
        echo 'Started call: ' . $call->sid.'<br>'.$url;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }