<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** * * This page is the basic template of the website builder. Each additional function will load from the web builder folder. * */ 
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="content-header">
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
    <div class="row">
        <div class="col-md-3">
<div class="widget">
    <div class="widget-extra themed-background-dark">
        <h3 class="widget-content-light">Navigation</h3>
    </div>
    <div class="widget-extra-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="javascript:void(0)"><span class="badge pull-right">10</span>Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Activity</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Blog</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Pages Editor</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Add New Page</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Header Editor</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Footer Editor</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="badge pull-right">9</span>Domain Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
        </div>
        <?php
include_once 'web-builder/default.php'; 
        ?>
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
<script>
    $(function () {
        FormsWizard.init();
    });
</script>

<?php include 'inc/template_end.php'; ?>