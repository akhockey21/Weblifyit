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
    <div class="block full">
        <div class="block-title">
            <h2>Working Tabs <small>Block and Simple</small></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block full">
                    <div class="block-title">
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <li class="active"><a href="#example-tabs2-activity">Activity</a></li>
                            <li><a href="#example-tabs2-profile">Profile</a></li>
                            <li><a href="#example-tabs2-options" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cogs"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="example-tabs2-activity">Block tabs..</div>
                        <div class="tab-pane" id="example-tabs2-profile">Profile..</div>
                        <div class="tab-pane" id="example-tabs2-options">Settings..</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-tabs push" data-toggle="tabs">
                    <li class="active"><a href="#example-tabs-news">Activity</a></li>
                    <li><a href="#example-tabs-profile">Profile</a></li>
                    <li><a href="#example-tabs-messages" data-toggle="tooltip" title="" data-original-title="Messages"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#example-tabs-settings" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="example-tabs-news">News..</div>
                    <div class="tab-pane" id="example-tabs-profile">Profile..</div>
                    <div class="tab-pane" id="example-tabs-messages">Messages..</div>
                    <div class="tab-pane" id="example-tabs-settings">Settings..</div>
                </div>
            </div>
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