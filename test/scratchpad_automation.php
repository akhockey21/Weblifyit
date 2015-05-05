<?php
require_once 'db.php';
//require_once 'Services/Twilio.php';

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

//switch to automation table after its setup
$smsauto = mysql_query("SELECT meta_value FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_sms'");
$callauto = mysql_query("SELECT meta_value FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_call'");
$emailauto = mysql_query("SELECT meta_value FROM usermeta WHERE user_id='$firstuserrow' AND meta_key='automation_email'");


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
if($smsauto==1){
$status = "success";
echo $status;
}

////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////


    if($smsauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_sms', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_sms_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$phonenumber",
		    "$messagebody"
		);
    }
    if($callauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_call', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_sms_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $messagebody = "$messagebody , Press 1 to connect to customer.";
        
        $xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="2">'.$messagebody.'</Say></Gather><Dial timeout="30">'.$phnalert.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
		$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

		try {
			$call = $client->account->calls->create(
			    "4805264296",
			    "$phonenumber",
			    $url
			 );
		} catch (Exception $e) {
			// $status = "Unable to call service provider.";
			file_put_contents('call.txt', 'Error: ' . $e->getMessage());
		}
        
    }
    if($emailauto==1){
        
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_email_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
        
$data = array('body' => $messagebody);
Mail::send('emails.email', $data, function($message) use ($leademail, $leadname) {
    $message->to($leademail, $leadname);
    $message->subject('Test Customer Automation - Weblifyit!');
}); 
        
    } 
}
?>