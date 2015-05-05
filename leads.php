<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
include 'top_scripts/leads.php';
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
<?php include('models/app/leadscount.php');?>
<?php include 'models/leads.php'; ?>
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
 
<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsWizard.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>
<?php include 'inc/template_end.php'; ?> 