<?php

$name = $_GET['name'];
$device = $_GET['device'];
$model = $_GET['model'];
$damage = $_GET['damage'];
$phone = $_GET['phone'];

$msg = "You have a new potential customer, name is $name, Device is $device $model, and Damage is $damage, Press 1 to connect to customer.";

file_put_contents('msg.txt', $msg);

header('Content-type: text/xml');

echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<Response>
     <Gather timeout="60" finishOnKey="1">
        <Say loop="3"><?php echo $msg; ?></Say>
    </Gather>
    <Dial timeout="30">+18669489118<Dial>
    <Say>We are sorry. There was a problem.</Say>
</Response>