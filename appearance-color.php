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
            <div class="col-md-12">
                <ul class="nav nav-tabs push" data-toggle="tabs">
                    <li class="active"><a href="#general"><h4>General</h4></a></li>
                    <li><a href="#header"><h4>Header</h4></a></li>
                    <li><a href="#menu"><h4>Menu & Action Bar</h4></a></li>
                    <li><a href="#content"><h4>Content</h4></a></li>
                    <li><a href="#footer"><h4>Footer</h4></a></li>
                    <li><a href="#headings"><h4>Headings</h4></a></li>
                    <li><a href="#shortcodes"><h4>Shortcodes</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="general">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
            <label class="col-md-3 control-label" for="theme-kin"><h4>Theme Skin<h4></h4><p>Choose one of the predefined styles or set your own colors.</p></label>
            <div class="col-md-9">
                <select id="theme-skin" name="theme-skin" class="form-control" size="1">
                    <optgroup label="Theme Skins"><option value="Arial">- Custom Skin -</option><option value="Georgia">Blue</option><option value="Tahoma">Brown</option><option value="Times">Chocolate</option><option value="Trebuchet">Gold</option>
                        <option value="Verdana">Green</option><option value="Verdana">Olive</option><option value="Verdana">Orange</option><option value="Verdana">Pink</option><option value="Verdana">Red</option><option value="Verdana">Seagreen</option><option value="Verdana">Violet</option><option value="Verdana">Yellow</option></optgroup>
                </select>
            </div>
        </div>
                    
        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
            </div>
        </div>
    </form>
</div>
                    <div class="tab-pane active" id="header">
                        </div>
                    <div class="tab-pane active" id="menu">
                        </div>
                    <div class="tab-pane active" id="content">
                        </div>
                    <div class="tab-pane active" id="footer">
                        </div>
                    <div class="tab-pane active" id="headings">
                        </div>
                    <div class="tab-pane active" id="shortcodes">
                        </div>
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