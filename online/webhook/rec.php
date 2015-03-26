<?php

$url =  $_POST['RecordingUrl'];
require_once 'Services/Email/Mandrill.php';

$mandrill = new Mandrill('k-r31FIjRLF6zC51-yOMsA');

function sendEmail($html, $mandrill)
{
	$message = array(
        'html' => $html,
        'subject' => 'New Recording',
        'from_email' => 'customerservice@speedfixit.com',
        'from_name' => 'SpeedFixIt Customer Service',
        'to' => array(
            array(
                'email' => 'customerservice@speedfixit.com',
                'name' => 'SpeedFixIt Customer Service',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'customerservice@speedfixit.com')
    );
    $async = false;
    try {
	    $mandrill->messages->send($message, $async);
    } catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
     	file_put_contents('mail.txt', 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage());
   	// throw $e;
	}
}

sendEmail('<p>New Recording: '.$url.'</p>', $mandrill);