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
    if (isset($_POST['theme_skin'])) {
        APRColors::update($user, 'theme_skin', $_POST['theme_skin']);
    }
    if (isset($_POST['body_background'])) {
        APRColors::update($user, 'body_background', $_POST['body_background']);
    }
    if (isset($_POST['header_background'])) {
        APRColors::update($user, 'header_background', $_POST['header_background']);
    }
    if (isset($_POST['menu_link_color'])) {
        APRColors::update($user, 'menu_link_color', $_POST['menu_link_color']);
    }
    if (isset($_POST['menu_link_active_color'])) {
        APRColors::update($user, 'menu_link_active_color', $_POST['menu_link_active_color']);
    }
    if (isset($_POST['menu_active_link_background'])) {
        APRColors::update($user, 'menu_active_link_background', $_POST['menu_active_link_background']);
    }
    if (isset($_POST['theme_color'])) {
        APRColors::update($user, 'theme_color', $_POST['theme_color']);
    }
    if (isset($_POST['text_color'])) {
        APRColors::update($user, 'text_color', $_POST['text_color']);
    }
    if (isset($_POST['link_color'])) {
        APRColors::update($user, 'link_color', $_POST['link_color']);
    }
    if (isset($_POST['link_hover_color'])) {
        APRColors::update($user, 'link_hover_color', $_POST['link_hover_color']);
    }
    if (isset($_POST['hr_color'])) {
        APRColors::update($user, 'hr_color', $_POST['hr_color']);
    }
    if (isset($_POST['footer_theme_color'])) {
        APRColors::update($user, 'footer_theme_color', $_POST['footer_theme_color']);
    }
    if (isset($_POST['footer_background'])) {
        APRColors::update($user, 'footer_background', $_POST['footer_background']);
    }
    if (isset($_POST['footer_text_color'])) {
        APRColors::update($user, 'footer_text_color', $_POST['footer_text_color']);
    }
    if (isset($_POST['footer_link_color'])) {
        APRColors::update($user, 'footer_link_color', $_POST['footer_link_color']);
    }
    if (isset($_POST['footer_hover_link_color'])) {
        APRColors::update($user, 'footer_hover_link_color', $_POST['footer_hover_link_color']);
    }
    if (isset($_POST['footer_heading_color'])) {
        APRColors::update($user, 'footer_heading_color', $_POST['footer_heading_color']);
    }
}
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-md-8">
            <div class="block full">
                <div class="block-title">
                    <h2>Working Tabs <small>Block and Simple</small></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs push" data-toggle="tabs">
                            <li class="active"><a href="#general"><h4>General</h4></a>
                            </li>
                            <li><a href="#header"><h4>Header</h4></a>
                            </li>
                            <li><a href="#menu"><h4>Menu & Action Bar</h4></a>
                            </li>
                            <li><a href="#content"><h4>Content</h4></a>
                            </li>
                            <li><a href="#footer"><h4>Footer</h4></a>
                            </li>
                            <li><a href="#headings"><h4>Headings</h4></a>
                            </li>
                            <li><a href="#shortcodes"><h4>Shortcodes</h4></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="general">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            <h4>Theme Skin<h4></h4>
                                            <p>Choose one of the predefined styles or set your own colors.</p>
                                        </label>
                                        <div class="col-md-9">
                                            <select name="theme_skin" class="form-control" size="1" value="<?php APRColors::get($user, 'theme_skin', true); ?>">
                                                <optgroup label="Theme Skins">
                                                    <option value="custom-skin">- Custom Skin -</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="brown">Brown</option>
                                                    <option value="chocolate">Chocolate</option>
                                                    <option value="gold">Gold</option>
                                                    <option value="green">Green</option>
                                                    <option value="olive">Olive</option>
                                                    <option value="orange">Orange</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="red">Red</option>
                                                    <option value="seagreen">Seagreen</option>
                                                    <option value="violet">Violet</option>
                                                    <option value="yellow">Yellow</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Body Background</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="body_background" class="form-control" value="<?php APRColors::get($user, 'body_background', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="header">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Header Background</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="header_background" class="form-control" value="<?php APRColors::get($user, 'header_background', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Search Bar Background</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="search_bar_background" class="form-control" value="<?php APRColors::get($user, 'search_bar_background', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane" id="menu">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Menu | Link Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="menu_link_color" class="form-control" value="<?php APRColors::get($user, 'menu_link_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Menu | Active Link Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="menu_link_active_color" class="form-control" value="<?php APRColors::get($user, 'menu_link_active_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Menu | Active Link Background</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="menu_active_link_background" class="form-control" value="<?php APRColors::get($user, 'menu_active_link_background', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane" id="content">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Theme Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="theme_color" class="form-control" value="<?php APRColors::get($user, 'theme_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Text Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="text_color" class="form-control" value="<?php APRColors::get($user, 'text_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Link Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="link_color" class="form-control" value="<?php APRColors::get($user, 'link_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Link Hover Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="link_hover_color" class="form-control" value="<?php APRColors::get($user, 'link_hover_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Hr Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="hr_color" class="form-control" value="<?php APRColors::get($user, 'hr_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="footer">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Theme Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_theme_color" class="form-control" value="<?php APRColors::get($user, 'footer_theme_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Background</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_background" class="form-control" value="<?php APRColors::get($user, 'footer_background', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Text Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_text_color" class="form-control" value="<?php APRColors::get($user, 'footer_text_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Link Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_link_color" class="form-control" value="<?php APRColors::get($user, 'footer_link_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Hover Link Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_hover_link_color" class="form-control" value="<?php APRColors::get($user, 'footer_hover_link_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Footer Heading Color</label>
                                        <div class="col-md-6">
                                            <div class="input-group input-colorpicker colorpicker-element">
                                                <input type="text" name="footer_heading_color" class="form-control" value="<?php APRColors::get($user, 'footer_heading_color', true); ?>">
                                                <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                            <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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