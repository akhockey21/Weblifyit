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
    if (isset($_POST['links_in_new_window'])) {
        APRSocialMedia::update($user, 'links_in_new_window', $_POST['links_in_new_window']);
    }
    if (isset($_POST['skype'])) {
        APRSocialMedia::update($user, 'skype', $_POST['skype']);
    }
    if (isset($_POST['facebook'])) {
        APRSocialMedia::update($user, 'facebook', $_POST['facebook']);
    }
    if (isset($_POST['google_plus'])) {
        APRSocialMedia::update($user, 'google_plus', $_POST['google_plus']);
    }
    if (isset($_POST['twitter'])) {
        APRSocialMedia::update($user, 'twitter', $_POST['twitter']);
    }
    if (isset($_POST['vimeo'])) {
        APRSocialMedia::update($user, 'vimeo', $_POST['vimeo']);
    }
    if (isset($_POST['youtube'])) {
        APRSocialMedia::update($user, 'youtube', $_POST['youtube']);
    }
    if (isset($_POST['linkedin'])) {
        APRSocialMedia::update($user, 'linkedin', $_POST['linkedin']);
    }
    if (isset($_POST['pinterest'])) {
        APRSocialMedia::update($user, 'pinterest', $_POST['pinterest']);
    }
    if (isset($_POST['instagram'])) {
        APRSocialMedia::update($user, 'instagram', $_POST['instagram']);
    }
}
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
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Open Links In New Window</h4>
                    </label>
                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" checked="" name="links_in_new_window"><span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Skype Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="skype" value="<?php APRSocialMedia::get($user, 'skype', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Facebook Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="facebook" value="<?php APRSocialMedia::get($user, 'facebook', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Google + Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="google_plus" value="<?php APRSocialMedia::get($user, 'google_plus', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Twitter Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="twitter" value="<?php APRSocialMedia::get($user, 'twitter', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Vimeo Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="vimeo" value="<?php APRSocialMedia::get($user, 'vimeo', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your YouTube Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="youtube" value="<?php APRSocialMedia::get($user, 'youtube', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your LinkedIn Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="linkedin" value="<?php APRSocialMedia::get($user, 'linkedin', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Pinterest Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="pinterest" value="<?php APRSocialMedia::get($user, 'pinterest', true); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" >
                        <h4>Enter Your Instagram Link Here</h4>
                    </label>
                    <div class="col-md-9">
                        <input type="text" name="instagram" value="<?php APRSocialMedia::get($user, 'instagram', true); ?>">
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