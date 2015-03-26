<?php

if(isset($_POST['emails'])) {
	require_once 'Services/Email/Mandrill.php';
	$mandrill = new Mandrill('k-r31FIjRLF6zC51-yOMsA');

	$emails = $_POST['emails'];
	$emails = explode("\n", $emails);

	foreach ($emails as $key => $mail) {

	$message = array(
	        'subject' => 'Your SpeedFixIt Repair Request',
	        'from_email' => 'customerservice@speedfixit.com',
	        'from_name' => 'SpeedFixIt Customer Service',
	        'to' => array(
	        	array('email' => $mail, 'to' => 'to')
	        ),
	        'headers' => array('Reply-To' => 'customerservice@speedfixit.com')
	    );

	    $async = true;
	    try {
		    $result = $mandrill->messages->sendTemplate('email-1', array() ,$message, $async);
		    // print_r($result);
		    // print_r($message);
	    } catch(Mandrill_Error $e) {
	     	echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
		}

	}

	echo "<h3>Sent!</h3>";

}
?>
<form method="post">
	<textarea placeholder="Enter all the emails here" name="emails" rows="4" cols="30"></textarea>
	<br/>
	<small>One email at each line</small>
	<button>Send Emails</button>
</form>