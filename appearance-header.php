<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
/**
 * Page Options
 */ 
$display_mediaAdder = true;
$type_of_media_adder = 'images';
use Hazzard\Support\MessageBag; 
$user = Auth::user()->id;

if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['header_style'])) {
        APRHeader::update($user, 'header_style', $_POST['header_style']);
    }
    if (isset($_POST['option_full_width'])) {
        APRHeader::update($user, 'option_full_width', $_POST['option_full_width']);
    }
    if (isset($_POST['boxed_sticky'])) {
        APRHeader::update($user, 'boxed_sticky', $_POST['boxed_sticky']);
    }
    if (isset($_POST['header_image'])) {
        APRHeader::update($user, 'header_image', $_POST['header_image']);
    }
    if (isset($_POST['header_image_attachment'])) {
        APRHeader::update($user, 'header_image_attachment', $_POST['header_image_attachment']);
    }
    if (isset($_POST['header_minimalist'])) {
        APRHeader::update($user, 'header_minimalist', $_POST['header_minimalist']);
    }
    if (isset($_POST['header_sticky'])) {
        APRHeader::update($user, 'header_sticky', $_POST['header_sticky']);
    }
    if (isset($_POST['sticky_style'])) {
        APRHeader::update($user, 'sticky_style', $_POST['sticky_style']);
    }
    if (isset($_POST['search_icon'])) {
        APRHeader::update($user, 'search_icon', $_POST['search_icon']);
    }
    if (isset($_POST['logo'])) {
        APRHeader::update($user, 'logo', $_POST['logo']);
    }
    if (isset($_POST['logo_text'])) {
        APRHeader::update($user, 'logo_text', $_POST['logo_text']);
    }
    if (isset($_POST['logo_options'])) {
        APRHeader::update($user, 'logo_options', $_POST['logo_options']);
    }
    if (isset($_POST['favicon_media_id'])) {
        APRHeader::update($user, 'favicon_media_id', $_POST['favicon_media_id']);
    }
    if (isset($_POST['layout_boxed'])) {
        APRHeader::update($user, 'layout_boxed', $_POST['layout_boxed']);
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
            <div class="col-md-12">
                <ul class="nav nav-tabs push" data-toggle="tabs">
                    <li class="active"><a href="#header-style"><h4>Header Style</h4></a>
                    </li>
                    <li><a href="#logo-options"><h4>Logo Options</h4></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="header-style">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Style</h4>
                                    <p>Choose the header style for your website.</p>
                                </label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="header_style" value="modern">Modern
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="header_style" value="classic">Classic
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Options</h4>
                                </label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="option_full_width" value="1">Full Width
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="boxed_sticky" value="1">Boxed Sticky Header
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-file-input">
                                    <h4>Header | Image</h4>
                                    <p>Pages With sliders overide this setting. Also single pages may override this setting.</p>
                                </label>
                                <div class="col-md-9">
                                    
                                    
                                    
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
                                    
                                    
                                    <input type="text" id="header_image" name="header_image" value="<?php echo APRHeader::get($user, 'header_image', true); ?>" placeholder="Image ID">
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-sm btn-primary pull-left" href="#media-adder" data-toggle="modal" data-placement="bottom"><i class="fa fa-angle-right"></i> Select Image</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Image Attachment</h4>
                                    <p>Choose one of the predefined styles or set your own colors.</p>
                                </label>
                                <div class="col-md-9">
                                    <select name="header_image_attachment" class="form-control" size="1">
                                        <optgroup>
                                            <option value="Arial">Default</option>
                                            <option value="Georgia">Fixed</option>
                                            <option value="Tahoma">Parallax</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Minimalist</h4>
                                    <p>Header without background image & padding.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="header_minimalist"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Sticky Style</h4>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="header_sticky"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Header | Sticky Style</h4>
                                </label>
                                <div class="col-md-9">
                                    <select name="sticky_style" class="form-control" size="1" value="<?php echo APRHeader::get($user, 'sticky_style', true); ?>">
                                        <optgroup>
                                            <option value="white">White</option>
                                            <option value="dark">Dark</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Search Icon</h4>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="search_icon"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="logo-options">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Logo | Custom</h4>
                                </label>
                                <div class="col-md-9">
                                    <input type="file" id="example-file-input" name="example-file-input">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Logo | Text</h4>
                                    <p>Use text INSTEAD of graphic. <strong>Overwrites uploaded logo.</strong>
                                    </p>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="logo_text" value="<?php echo APRHeader::get($user, 'logo_text', true); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Logo | Options</h4>
                                </label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="logo_options1" value="link-to-homepage">Link to Homepage
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="logo_options2" value="option1">Wrap H1 Tag on Homepage
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="logo_options3" value="option1">Wrap H1 Tag on All Other Pages
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Custom Favicon</h4>
                                    <p>The Site Favicon.</p>
                                </label>
                                <div class="col-md-9">
                                    <input type="file" id="example-file-input" name="example-file-input">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button>
                                    <p>.ICO files Only.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Layout</h4>
                                </label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="layout_boxed" value="full-width">Full Width
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="layout_boxed" value="boxed">Boxed
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>


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