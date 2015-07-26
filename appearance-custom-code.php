<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['js_head_code'])) {
        APRCustomCssJs::update($user, 'js_head_code', $_POST['js_head_code']);
    }
    if (isset($_POST['js_footer_code'])) {
        APRCustomCssJs::update($user, 'js_footer_code', $_POST['js_footer_code']);
    }
    if (isset($_POST['custom_css'])) {
        APRCustomCssJs::update($user, 'custom_css', $_POST['custom_css']);
    }
}
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>
<!-- Page content -->
<div id="page-content">
    <div class="row">

        <div class="col-lg-6">
            <div class="block">
                <div class="block-title">
                    <h2><strong>Custom Javascript & CSS</strong> Code</h2>
                </div>
                <form action="" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Head Code</label>
                        <div class="col-md-9" style="width: auto; overflow: hidden;">
                            <textarea class="form-control" rows="6" placeholder="Enter meta description.." name="js_head_code"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Footer Code</label>
                        <div class="col-md-9" style="width: auto; overflow: hidden;">
                            <textarea id="product-meta-description" name="js_footer_code" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Custom CSS Code</label>
                        <div class="col-md-9" style="width: auto; overflow: hidden;">
                            <textarea id="product-meta-description" name="custom_css" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                        </div>
                    </div>
                </form>
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