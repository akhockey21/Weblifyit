<?php 
require_once 'app/init.php';
require_once 'db.php';
//require_once 'Services/Twilio.php';

$formData = array();
 
file_put_contents('data.txt', serialize($formData));

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone_number = $_POST['phone_number'];
$formusername = $_POST['weblifyit_email'];

//get time then combine all form info into one place
$leadate = date("Y-m-d h:i:sa");
$combineinfo = "$leadate,$name,$phone_number,$email_address";

//Find User From Hidden Userfield
$finduser = mysql_query("SELECT id FROM users WHERE email='$formusername'");
$userrows=mysql_fetch_assoc($finduser);
$id = $userrows['id'];

//////////////
//get current lead field
$finduserlead = Userleads::get($id, 'userlead', true);

//insert into backup
$qin1 = Userleads::insert($id, 'userleadbackup', $finduserlead);
if(!$qin1) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin1);
}

//DO final Combine With new Lead and Old leads
$finalcombine = "$finduserlead;$combineinfo";
$finalcombine = rtrim($finalcombine, ';');
//Insert Into User Leads appending combined data to end of field
$qin = Userleads::update($id, 'userlead', $finalcombine);
if(!$qin) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin);
}

$status = "success";
echo $status;

?>