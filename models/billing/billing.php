<?php
/**
 * Billing Module That will be used to bill customers.
 */ 

require_once('src/stripe/init.php');

\Stripe\Stripe::setApiKey('sk_test_DBKvHRq1F3oiTwL9Y2H6nHRP');

$myCard = array('number' => '4242424242424242', 'exp_month' => 5, 'exp_year' => 2016);
\Stripe\Charge::create(array('card' => $myCard, 'amount' => 2000, 'currency' => 'usd'));


?>
