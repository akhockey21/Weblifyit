<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
$category = Userwebsite::get(Auth::user()->id, 'category', true);
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
                                    <img src="/templates/screenshots/template_images/1.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="block-section">
                    <h3 class="sub-header text-center"><strong>Your Current Theme: Tucson</strong></h3>
                    <p class="clearfix"><i class="fa fa-clock-o fa-5x text-danger pull-left animation-pulse"></i>Your theme name is <span class="text-success"><strong>theme name.</strong></span> You can either change your theme, or get customize your theme by clicking the button below..</p>
                    <p>
                        <a href="page_ready_pricing_tables.php" class="btn btn-lg btn-success btn-block">Customize Theme Now</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    
    
    
<?php $templates = DB::table('global_themes')->get();
?>
    <div class="row">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Change Your Website Theme</strong></h2>
    <?php
foreach ($templates as $web) { 
    //screen shot location templates/screenshots/$category/$template_id.png
    //$template->template_id;
    $tempname = $web->template_name;
    $tempid = $web->template_id;
    $tempss = "templates/screenshots/template_images/$tempid.png";
    ?>
<div class="col-md-4">
<div class="widget">
<div class="widget-simple">
<h4 class="widget-content widget-content-light themed-color-modern text-center"><strong><?php echo $tempname ?></strong></h4>
</div>
<div class="widget-extra-full themed-background-modern">
<div id="widget-carousel3" class="carousel slide remove-margin">
<div class="carousel-inner">
<div class="active item">
<img src="<?php echo $tempss ?>" alt="image">
</div>
</div>
</div>
</div>
<div class="widget-simple">
    <div class="widget-content form-group form-actions text-center">
<a class="btn btn-sm btn-warning" href="<?php echo $tempss ?>" target="_blank">Preview Theme</a>
<a class="btn btn-sm btn-primary" href="#confirmtemplate" data-toggle="modal" data-placement="bottom" onclick="getElementById('template-id').value='<?php echo "$tempid"; ?>'">Choose Theme</a>
</div>
</div>
</div>
</div>
    <?php
}
    ?> </div></div>
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