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
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Posts Per Page</h4><p>Number of Blog Posts Per Page.</p></label>
<div class="col-md-9">
    <input type="text">
</div>

        </div>  
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Blog Layout</h4><p>Layout for The Blog Page.</p></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Classic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Masonry
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Timeline
        </label>
    </div>
</div>

        </div>  
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Excerpt Length</h4><p>Word Length of Article Previews.</p></label>
<div class="col-md-9">
    <input type="text">
            </div></div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Post Title</h4><p>Show Post Title</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Post Meta</h4><p>Show Post Meta</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Author Box</h4><p>Show Author Box</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Related Posts</h4><p>Show Related Posts</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Comments</h4><p>Show Comments On Blog Post</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Zoom Image On Post</h4><p>Zoom the Featured Image When Clicked</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
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