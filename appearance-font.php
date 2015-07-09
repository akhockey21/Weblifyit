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
                <select id="content-font" name="content-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="main-menu-font"><h4>Main Menu Font<h4></h4><p>Header menu.</p></label>
            <div class="col-md-9">
                <select id="main-menu-font" name="main-menu-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="page-title-font"><h4>Page Title Font<h4></h4></label>
            <div class="col-md-9">
                <select id="content-font" name="page-title-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="big-headings-font"><h4>Big Headings Font<h4></h4><p>H1, H2, H3 & H4 headings.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="big-headings-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="small-headings-font"><h4>Small Headings Font<h4></h4><p>All theme texts except headings and menu.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="small-headings-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Content Font<h4></h4><p>H5 & H6 headings.</p></label>
            <div class="col-md-9">
                <select id="content-font" name="content-font" class="form-control" size="1">
                    <?php require 'web-builder/inc/font-select-group.inc'; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Google Font Style & Weight<h4></h4><p>Impact on page <strong>load time.</strong></p></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">100 Thin
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">100 Thin
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox2">
            <input type="checkbox" id="checkbox2" name="checkbox2" value="option1">100 Thin Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="checkbox3" value="option1">200 Extra-Light
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="checkbox4" value="option1">200 Extra-Light Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox5">
            <input type="checkbox" id="checkbox5" name="checkbox5" value="option1">300 Light
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox6">
            <input type="checkbox" id="checkbox6" name="checkbox6" value="option1">300 Light Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox7">
            <input type="checkbox" id="checkbox7" name="checkbox7" value="option1">400 Regular
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox8">
            <input type="checkbox" id="checkbox8" name="checkbox8" value="option1">400 Regular Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox9">
            <input type="checkbox" id="checkbox9" name="checkbox9" value="option1">500 Medium
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox10">
            <input type="checkbox" id="checkbox10" name="checkbox10" value="option1">500 Medium Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox11">
            <input type="checkbox" id="checkbox11" name="checkbox11" value="option1">600 Semi-Bold
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox12">
            <input type="checkbox" id="checkbox12" name="checkbox12" value="option1">600 Semi-Bold Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox13">
            <input type="checkbox" id="checkbox13" name="checkbox13" value="option1">700 Bold
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox14">
            <input type="checkbox" id="checkbox14" name="checkbox14" value="option1">700 Bold Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox15">
            <input type="checkbox" id="checkbox15" name="checkbox15" value="option1">800 Extra-Bold
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox16">
            <input type="checkbox" id="checkbox16" name="checkbox16" value="option1">800 Extra-Bold Italic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox17">
            <input type="checkbox" id="checkbox17" name="checkbox17" value="option1">900 Black
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox18">
            <input type="checkbox" id="checkbox18" name="checkbox18" value="option1">900 Black Italic
        </label>
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