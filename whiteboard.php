<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

require 'models/billing/billing.php';

?>