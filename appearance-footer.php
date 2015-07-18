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
            <label class="col-md-3 control-label" for="theme-kin">
                <h4>Layout</h4>
            </label>
            <div class="col-md-9">
                <select id="theme-skin" name="theme-skin" class="form-control" size="1"><option value="" selected="selected">
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
                <select id="theme-skin" name="theme-skin" class="form-control" size="1"><option value="" selected="selected">
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
            <label class="col-md-4 control-label" for="example-colorpicker2">
                <h4>Call To Action</h4></label>
            <div class="col-md-6">
                <div class="input-group input-colorpicker colorpicker-element">
                    <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="example-colorpicker2">
                <h4>Copyright</h4></label>
            <div class="col-md-6">
                <div class="input-group input-colorpicker colorpicker-element">
                    <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="theme-kin">
                <h4>Copyright & Social Bar</h4>
            </label>
            <div class="col-md-9">
                <select id="theme-skin" name="theme-skin" class="form-control" size="1"><option value="" selected="selected">
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