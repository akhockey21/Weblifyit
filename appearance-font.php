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
    if (isset($_POST['content_font'])) {
        APRGeneral::update($user, 'content_font', $_POST['content_font']);
    }
    if (isset($_POST['main_menu_font'])) {
        APRGeneral::update($user, 'main_menu_font', $_POST['main_menu_font']);
    }
    if (isset($_POST['page_title_font'])) {
        APRGeneral::update($user, 'page_title_font', $_POST['page_title_font']);
    }
    if (isset($_POST['big_headings_font'])) {
        APRGeneral::update($user, 'big_headings_font', $_POST['big_headings_font']);
    }
    if (isset($_POST['small_headings_font'])) {
        APRGeneral::update($user, 'small_headings_font', $_POST['small_headings_font']);
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
                    <li class="active"><a href="#font-family"><h4>Font Family</h4></a></li>
                    <li><a href="#font-size"><h4>Font Size</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="font-family">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Content<h4></h4><p>This font size will be used for all theme texts.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="content_font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="main-menu-font"><h4>Main Menu Font<h4></h4><p>Header menu.</p></label>
            <div class="col-md-9">
                <select id="main-menu-font" name="main_menu_font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="page-title-font"><h4>Page Title Font<h4></h4></label>
            <div class="col-md-9">
                <select id="content-font" name="page_title_font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="big-headings-font"><h4>Big Headings Font<h4></h4><p>H1, H2, H3 & H4 headings.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="big_headings_font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="small-headings-font"><h4>Small Headings Font<h4></h4><p>H5 & H6 headings. All theme texts except headings and menu.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="small_headings_font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
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
                    <div class="tab-pane" id="font-size">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Content Font<h4></h4>
        <p>All theme texts except headings and menu.</p>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Content Font<h4></h4>
        <p>This font size will be used for all theme texts.</p>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Main Menu<h4></h4>
        <p>This font size will be used for top level only.</p>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Heading H1<h4></h4>
        <p>Subpages header title.</p>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Heading H2<h4></h4>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Heading h3<h4></h4>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Heading H4<h4></h4>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
    </div>
</div>
        <div class="form-group">
    <label class="col-md-3 control-label" for="content-font">
        <h4>Heading H6<h4></h4>
    </label>
    <div class="col-md-9">
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                <div class="slider-handle round" tabindex="0" style="left: 0%;"></div>
                <div class="slider-handle round hide" tabindex="0" style="left: 0%;"></div>
            </div>
            <div class="tooltip top in" style="top: -32px; left: -9px;">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">0</div>
            </div>
            <input type="text" id="example-slider-hor1" name="example-slider-hor1" class="form-control input-slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" style="display: none;">
        </div>
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