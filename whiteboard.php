<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

$userID = Auth::user()->id;
 

echo WebsiteSettings::get($userID, 'template_id', 3);
?>

