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
    <div class="block block-alt-noborder">
        <div class="row">
            <div class="col-md-5">
                <div class="widget">
                    <div class="widget-extra-full themed-background-modern">
                        <div id="widget-carousel3" class="carousel slide remove-margin">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img class="img-rounded" src="img/desktop.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="block-section">
                    <h3 class="sub-header"><strong>Your Website Is Not Published!</strong></h3>
                    <p class="clearfix"><i class="fa fa-clock-o fa-5x text-danger pull-left animation-pulse"></i>Your site is not published live? Go to the Editor and Click Publish. <span class="text-success"><strong>theme name.</strong></span></p>
                    <p>
                <button type="button" class="btn btn-lg btn-info"><i class="hi hi-pencil"></i> Edit Site</button>
                <button type="button" class="btn btn-lg btn-success">Choose Domain</button>
                    </p>
                </div> 
            </div>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 pull-right">
        <div class="list-group" data-toggle="tabs">
            <a href="#logo-color-options" class="list-group-item active">
                <h3 class="list-group-item-heading text-center">Your Website <strong>Todo List</strong></h3> 
            </a>
            <a href="#logo-color-options" class="list-group-item">
                <span class="badge"><i class="hi hi-ok"></i></span>
                <h4 class="list-group-item-heading">Setup Color &amp; Logo Options</h4>
            </a>
            <a href="#logo-color-options" class="list-group-item">
                <span class="badge"><i class="hi hi-ok"></i></span>
                <h4 class="list-group-item-heading">Review/Edit Homepage Text</h4>
            </a>
            <a href="#logo-color-options" class="list-group-item">
                <span class="badge"><i class="hi hi-ok"></i></span>
                <h4 class="list-group-item-heading">Review/Edit About Us Page Text</h4>
            </a>
            <a href="#logo-color-options" class="list-group-item">
                <span class="badge"><i class="hi hi-ok"></i></span>
                <h4 class="list-group-item-heading">Review/Edit Contact Us Page Text</h4>
            </a>
            <a href="#logo-color-options" class="list-group-item">
                <span class="badge"><i class="hi hi-ok"></i></span>
                <h4 class="list-group-item-heading">Complete Search Engine Settings</h4>
            </a>
    
    </div>
</div>
        <div class="col-md-4">
            <a href="page_ready_article.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Create New <strong>Article</strong><br>
<small>Setup Blog</small>
</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="page_comp_charts.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="gi gi-more_items"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Create New <strong>Page</strong><br>
<small>Manage Pages</small>
</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="page_ready_inbox.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="gi gi-shopping_cart"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Set Up An<strong>Online Store</strong>
<small>Start eCommerce</small>
</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="page_comp_gallery.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                        <i class="gi gi-picture"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Manage Your <strong>Media</strong>
<small>Website Images & Files</small>
</h3>
                </div>
            </a>
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