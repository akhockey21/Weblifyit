<?php
// This is a sample PHP script that demonstrates accepting a POST from the        
// Unbounce form submission webhook, and then sending an email notification.      
function stripslashes_deep($value) {
  $value = is_array($value) ?
    array_map('stripslashes_deep', $value) :
    stripslashes($value);

  return $value;
}

// First, grab the form data.  Some things to note:                               
// 1.  PHP replaces the '.' in 'data.json' with an underscore.                    
// 2.  Your fields names will appear in the JSON data in all lower-case,          
//     with underscores for spaces.                                               
// 3.  We need to handle the case where PHP's 'magic_quotes_gpc' option           
//     is enabled and automatically escapes quotation marks.                      
if (get_magic_quotes_gpc()) {
  $unescaped_post_data = stripslashes_deep($_POST);
} else {
  $unescaped_post_data = $_POST;
}
$form_data = json_decode($unescaped_post_data['data_json']);

// If your form data has an 'Email Address' field, here's how you extract it:     
$email_address = $form_data->email[0];
$formusername = $form_data->weblify_username[0];
$phone_number = $form_data->phone_number[0];
$name = $form_data->name[0];

// Grab the remaining page data...                                                
$page_id = $_POST['page_id'];
$page_url = $_POST['page_url'];
$variant = $_POST['variant'];

//get time then combine all form info into one place
$d=mktime(11, 14, 54, 8, 12, 2014);
$leadate = date("Y-m-d h:i:sa", $d);
$combineinfo = "$leadate,$name,$phone_number,$email_address";

require_once 'db.php';
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

//Insert Into User Leads appending combined data to end of field
$qin = mysql_query("UPDATE userleads SET meta_value='$finalcombine' WHERE id='$firstleadrowid';");
if(!$qin) {
	file_put_contents('mysql_error.txt', mysql_error());
} else {
	// file_put_contents('mysql.txt', $qin);
}
?>