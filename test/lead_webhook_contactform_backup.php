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

$status = "success";
echo $status;
?>