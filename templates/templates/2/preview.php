<?php require_once '../../../app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
?>
<?php include 'build/preview.php'; ?>