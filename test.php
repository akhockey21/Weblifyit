<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);

$data = implode(',', $_POST['item']);

Userwebsite::update(Auth::user()->id, 'data', $data);


?>