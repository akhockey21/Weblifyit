<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());
$landing_page = Usermeta::get(Auth::user()->id, 'landing_page', true);
$leadtest = Userleads::get(Auth::user()->id, 'userlead', true);
$p_good = Usermeta::get(Auth::user()->id, 'payment_good', true);
$p_balance = Usermeta::get(Auth::user()->id, 'payment_balance', true);
$autoreports = Usermodels::get(Auth::user()->id, 'autoreports', true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settings</title>
	
	<script src="<?php echo asset_url('js/vendor/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo asset_url('js/easylogin.js') ?>"></script>
</head>
<body>
    <h1>Are You Sure You Want To Go To The New Client Wizard</h1>
</body>
</html>