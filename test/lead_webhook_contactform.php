<?php
require_once 'db.php';
require_once 'Services/Twilio.php';

$AccountSid = "ACbb3c4e8db938b277cadbb80bca1ddf87";
$AuthToken = "e79fb3595833bcc67c89e99b67299362";

$client = new Services_Twilio($AccountSid, $AuthToken);

$formData = array();
 
file_put_contents('data.txt', serialize($formData));

$name = strip_tags( trim( $_POST[ 'name' ] ) );
$email_address = strip_tags( trim( $_POST[ 'email' ] ) );
$phone_number = strip_tags( trim( $_POST[ 'phone_number' ] ) );
$formusername = strip_tags( trim( $_POST[ 'weblifyit_email' ] ) );

//get time then combine all form info into one place
$leadate = date("Y-m-d h:i:sa");
$combineinfo = "$leadate,$name,$phone_number,$email_address";


//Find User From Hidden Userfield
$finduser = mysql_query("SELECT id FROM users WHERE email='$formusername'");
$userrows=mysql_fetch_assoc($finduser);
$firstuserrow = $userrows['id'];

//get current lead field
$finduserlead = mysql_query("SELECT meta_value FROM userleads WHERE user_id='$firstuserrow'");
$leadrows=mysql_fetch_assoc($finduserlead);
$firstleadrow = $leadrows['meta_value'];
$firstleadrowid = $leadrows['id'];

//get current lead field id
$finduserleadid = mysql_query("SELECT id FROM userleads WHERE user_id='$firstuserrow'");
$leadrows=mysql_fetch_assoc($finduserleadid);
$firstleadrowid = $leadrows['id'];

//insert into backup
$qin1 = mysql_query("INSERT INTO `userleads` (user_id, meta_key, meta_value) VALUES ('$firstuserrow', 'userleadbackup', '$firstleadrow');");
if(!$qin1) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin1);
}

//DO final Combine With new Lead and Old leads
$finalcombine = "$firstleadrow;$combineinfo";
$finalcombine = rtrim($finalcombine, ';');
//Insert Into User Leads appending combined data to end of field
$qin = mysql_query("UPDATE userleads SET meta_value='$finalcombine' WHERE id='$firstleadrowid' AND meta_key='userlead';");
if(!$qin) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin);
}


///////
// GET AUTOMATION DATA
///////
$smsauto_q = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_sms'");
$smsauto_r = mysql_fetch_assoc($smsauto_q);
$smsauto = $smsauto_r['meta_value'];

$callauto_q = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_call'");
$callauto_r = mysql_fetch_assoc($callauto_q);
$callauto = $callauto_r['meta_value'];

$emailauto_q = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_email'");
$emailauto_r = mysql_fetch_assoc($emailauto_q);
$emailauto = $emailauto_r['meta_value'];

$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='business_name'");
$getr = mysql_fetch_assoc($getq);
$businessname = $getr['meta_value'];

    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$name", "$email_address", "$phone_number");


//if sms auto
if($smsauto==1){
    
$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='leadalerts_sms'");
$getr = mysql_fetch_assoc($getq);
$phnalert = $getr['meta_value'];

$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_message_sms_customer'");
$getr = mysql_fetch_assoc($getq);
$messageraw_c = $getr['meta_value'];

$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_message_sms'");
$getr = mysql_fetch_assoc($getq);
$messageraw_n = $getr['meta_value'];
    
    $messagebody_n = str_replace($tags, $replacetags, $messageraw_n);
    
    $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$phnalert",
		    "$messagebody_n"
		);
    
    $messagebody_c = str_replace($tags, $replacetags, $messageraw_c);
    $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$phone_number",
		    "$messagebody_c"
		);
        
}

//if call auto
if($callauto==1){
$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='leadalerts_call'");
$getr = mysql_fetch_assoc($getq);
$phnalert = $getr['meta_value'];


$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_message_call'");
$getr = mysql_fetch_assoc($getq);
$messageraw_n = $getr['meta_value'];
    
    $messagebody = str_replace($tags, $replacetags, $messageraw_n);
    $messagebody = "$messagebody , Press 1 to connect to customer.";
        
        $xml = '<Response><Say loop="2">'.$messagebody.'</Say><Gather timeout="60" finishOnKey="1"></Gather><Dial timeout="30">'.$phone_number.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
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
}
// if email auto
if($emailauto==1){
$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_email_customer'");
$getr = mysql_fetch_assoc($getq);
$messageraw_c = $getr['meta_value'];

$getq = mysql_query("SELECT * FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_message_email'");
$getr = mysql_fetch_assoc($getq);
$messageraw_n = $getr['meta_value'];
}


$status = "success";
echo $status;

?>