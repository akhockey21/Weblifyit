<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

 

echo uniqid();
?>

