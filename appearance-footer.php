<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['layout'])) {
        APRFooter::update($user, 'layout', $_POST['layout']);
    }
    if (isset($_POST['style'])) {
        APRFooter::update($user, 'style', $_POST['style']);
    }
    if (isset($_POST['background_image'])) {
        APRFooter::update($user, 'background_image', $_POST['background_image']);
    }
    if (isset($_POST['call_to_action'])) {
        APRFooter::update($user, 'call_to_action', $_POST['call_to_action']);
    }
    if (isset($_POST['copyright'])) {
        APRFooter::update($user, 'copyright', $_POST['copyright']);
    }
    if (isset($_POST['copyright_and_social_bar'])) {
        APRFooter::update($user, 'copyright_and_social_bar', $_POST['copyright_and_social_bar']);
    }
}
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="" data-original-title="Toggles .form-bordered class">No Borders</a>
                    </div>
                    <h2><strong>Horizontal</strong> Form</h2>
                </div>
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
            <label class="col-md-3 control-label">
                <h4>Layout</h4>
            </label>
            <div class="col-md-9">
                <select name="layout" class="form-control" size="1" value="<?php echo APRFooter::get($user, 'layout', true); ?>"><option value="" selected="selected">
    Default</option>
<option value="4;one-fourth;one-fourth;one-fourth;one-fourth">1/4 1/4 1/4 1/4</option>
<option value="3;one-fourth;one-fourth;one-second;">1/4 1/4 1/2</option>
<option value="3;one-fourth;one-second;one-fourth;">1/4 1/2 1/4</option>
<option value="3;one-second;one-fourth;one-fourth;">1/2 1/4 1/4</option>
<option value="3;one-third;one-third;one-third;">1/3 1/3 1/3</option>
<option value="2;one-third;two-third;;">1/3 2/3</option>
<option value="2;two-third;one-third;;">2/3 1/3</option>
<option value="2;one-second;one-second;;">1/2 1/2</option>
<option value="1;one;;;">1/1</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="theme-kin">
                <h4>Style</h4>
            </label>
            <div class="col-md-9">
                <select name="style" class="form-control" size="1" value="<?php echo APRFooter::get($user, 'style', true); ?>"><option value="" selected="selected">
    Default</option>
<option value="4;one-fourth;one-fourth;one-fourth;one-fourth">Fixed</option>
<option value="3;one-fourth;one-fourth;one-second;">Sliding</option>
                </select>
            </div>
        </div>
        <div class="form-group">
<label class="col-md-3 control-label" for="example-file-input">
                <h4>Background Image</h4>
                <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button></label>
<div class="col-md-9">
<input type="file" id="example-file-input" name="example-file-input">
</div>
</div>
        <div class="form-group">
            <label class="col-md-4 control-label">
                <h4>Call To Action</h4></label>
            <div class="col-md-6">
                <div class="input-group input-colorpicker colorpicker-element">
                    <input type="text"  name="call_to_action" class="form-control" value="<?php echo APRFooter::get($user, 'call_to_action', true); ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">
                <h4>Copyright</h4></label>
            <div class="col-md-6">
                <div class="input-group input-colorpicker colorpicker-element">
                    <input type="text"  name="copyright" class="form-control" value="<?php echo APRFooter::get($user, 'copyright', true); ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">
                <h4>Copyright & Social Bar</h4>
            </label>
            <div class="col-md-9">
                <select name="copyright_and_social_bar" class="form-control" size="1" value="<?php echo APRFooter::get($user, 'copyright_and_social_bar', true); ?>"><option value="" selected="selected">
    Default</option>
<option value="4;one-fourth;one-fourth;one-fourth;one-fourth">Center</option>
<option value="3;one-fourth;one-fourth;one-second;">Hidden</option>
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