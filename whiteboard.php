<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

$userID = Auth::user()->id;
 

echo PagesContent::get(Auth::user()->id, 2, 'body', true); 
?>