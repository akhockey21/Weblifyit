<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); ?>

<!-- Page content -->
<div id="page-content">
<?php include 'models/web/preview.php'; ?>
</div>
