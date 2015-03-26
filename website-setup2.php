<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$page = isset($_GET['p']) ? $_GET['p'] : 'content';
$user = User::find(Auth::user()->id);
switch ($page) {
	case 'content':
		$user = User::find(Auth::user()->id);
    require_once 'models/web/content_top.php';
		
	break;
	case 'design':
		$user = User::find(Auth::user()->id);
        require_once 'models/web/design_top.php';
	break;
	case 'pages':
		$user = User::find(Auth::user()->id);
		require_once 'models/web/pages_top.php';
	break;
	case 'settings':
		require_once 'models/web/settings_top.php';
	break;
}
?> 
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start_web.php'; ?>
<?php include 'inc/page_head_web.php'; ?>

<!-- Page content -->
<?php
switch ($page) {
	case 'content':
?>
<?php include 'models/web/content_bottom.php'; ?>
<?php
	break;
?>
<?php
	case 'design':
?>
<?php include 'models/web/design_bottom.php'; ?>
<?php
	break;
?>
<?php
	case 'pages':
?>
<?php include 'models/web/pages_bottom.php'; ?>
<?php
	break;
?><?php
	case 'settings':
?> 
<?php include 'models/web/settings_bottom.php'; ?>
<?php
	break;
}
?>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script> 

<!-- Load and execute javascript code used only in this page --> 
<script src="js/pages/formsWizard1.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>

<?php include 'inc/template_end.php'; ?>