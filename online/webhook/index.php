<?php

$form_data = $_POST['data_json'];
$form_data = json_decode($form_data, true);

$f = '';
foreach ($_POST as $key => $value) {
	$f.= $key.' = '.$value."\n\r";
}
file_put_contents('data.txt', $f);

require_once 'db.php';
require_once 'Services/Twilio.php';
require_once 'Services/Email/Mandrill.php';

$mandrill = new Mandrill('k-r31FIjRLF6zC51-yOMsA');

$AccountSid = "AC8e22829bc180d722010b0ebfd81917b5";
$AuthToken = "75009718bf4c3aa27fb289e837f24ed4";

$client = new Services_Twilio($AccountSid, $AuthToken);


$name = $form_data['name'][0];
$email = $form_data['email'][0];
$phone = $form_data['phone_number'][0];

$combine = "'$name','$email','$phone'"


$qin = mysql_query("INSERT INTO `userleads` (user_id, meta_key, meta_value) VALUES (1, 'userlead', '$name');");
if(!$qin) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin);
}

?>