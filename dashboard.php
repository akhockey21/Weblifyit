<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
        <div class="row">
            <div class="col-md-2">
                <img src="img/desktop.png" class="img-rounded" style="width: 250px; hieght: 100%;">
            </div>
            <div class="col-md-3">
                <h2>Your Website Name</h2>
                <p>Your site is not published live? Go to the Editor and Click Publish.</p>
                <button type="button" class="btn btn-info"><i class="hi hi-pencil"></i> Edit Site</button>
                <button type="button" class="btn btn-success">Upgrade</button>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-7">
                <img src="img/promo.png" class="img-rounded" style="width: 100%; hieght: 100%;">
            </div> 
        </div>
</div>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formWizardWeblifyit.js"></script> 
<script>$(function(){ FormsWizard.init(); });</script>

<?php include 'inc/template_end.php'; ?>