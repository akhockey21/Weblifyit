<?php
//require_once 'db.php';

$name = strip_tags( trim( $_POST[ 'name' ] ) );
$email_address = strip_tags( trim( $_POST[ 'email' ] ) );
$phone_number = strip_tags( trim( $_POST[ 'phone_number' ] ) );
$formusername = strip_tags( trim( $_POST[ 'weblifyit_email' ] ) );

$name = str_replace(";","", $name);
$email_address = str_replace(","," ", $email_address);
$phone_number = str_replace(","," ", $phone_number);
$formusername = str_replace(","," ", $formusername);

$name = str_replace(";",";", $name);
$email_address = str_replace(";"," ", $email_address);
$phone_number = str_replace(";"," ", $phone_number);
$formusername = str_replace(";"," ", $formusername);

//get time then combine all form info into one place
$leadate = date("Y-m-d h:i:sa");
$combineinfo = "$formusername,$leadate,$name,$phone_number,$email_address";

//mysql_query("INSERT INTO `leadsquery` (lead) VALUES ('$combineinfo');");

//$somearg = escapeshellarg($combineinfo);
//exec("php run.php $somearg > /dev/null &");
exec('php run.php $combineinfo');
$status = "success";
echo $status;

?>