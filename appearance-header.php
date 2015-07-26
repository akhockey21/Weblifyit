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
                    <li class="active"><a href="#header-style"><h4>Header Style</h4></a></li>
                    <li><a href="#logo-options"><h4>Logo Options</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="header-style">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Header | Style</h4><p>Choose the header style for your website.</p></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Modern
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Classic
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox2">
            <input type="checkbox" id="checkbox2" name="checkbox2" value="option1">Creative
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="checkbox3" value="option1">Creative: Always Open
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="checkbox4" value="option1">Stack Left
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox5">
            <input type="checkbox" id="checkbox5" name="checkbox5" value="option1">Stack Right
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox6">
            <input type="checkbox" id="checkbox6" name="checkbox6" value="option1">Fixed
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox7">
            <input type="checkbox" id="checkbox7" name="checkbox7" value="option1">Transparent
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox8">
            <input type="checkbox" id="checkbox8" name="checkbox8" value="option1">Simple
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox9">
            <input type="checkbox" id="checkbox9" name="checkbox9" value="option1">Split Menu
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox10">
            <input type="checkbox" id="checkbox10" name="checkbox10" value="option1">Overlay Menu
        </label>
    </div>
</div>

        </div>  
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Header | Options</h4></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Full Width
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Boxed Sticky Header
        </label>
    </div>
</div>

        </div>  
        <div class="form-group">
<label class="col-md-3 control-label" for="example-file-input">
                <h4>Header | Image</h4><p>Pages With sliders overide this setting. Also single pages may override this setting.</p></label>
<div class="col-md-9">
<input type="file" id="example-file-input" name="example-file-input">
<button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button>
</div>
</div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Header | Image Attachment</h4>
                                    <p>Choose one of the predefined styles or set your own colors.</p>
                                </label>
                                <div class="col-md-9">
                                    <select id="theme-skin" name="theme-skin" class="form-control" size="1">
                                        <optgroup>
                                            <option value="Arial">Default</option>
                                            <option value="Georgia">Fixed</option>
                                            <option value="Tahoma">Parallax</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Header | Minimalist</h4>
                                    <p>Header without background image & padding.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Header | Sticky Style</h4>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Header | Sticky Style</h4>
                                </label>
                                <div class="col-md-9">
                                    <select id="theme-skin" name="theme-skin" class="form-control" size="1">
                                        <optgroup>
                                            <option value="Arial">White</option>
                                            <option value="Georgia">Dark</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Search Icon</h4>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Subheader | Alpha (transparency)</h4><p>0 = transparent, 100 = solid</p>
                                </label>
                                <div class="col-md-9">
                                    <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 25%;"></div><div class="slider-track-high" style="right: 0px; width: 75%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 25%;"></div><div class="slider-handle max-slider-handle round hide" tabindex="0" style="left: 0%;"></div></div><div class="tooltip tooltip-main top in" style="left: 25%; margin-left: -12.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">25</div></div><div class="tooltip tooltip-min top" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div></div>
                                    <p>Important: This option can be used only with Custom or One Color Skin.</p>
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
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Logo | Sticky Header</h4>
                                </label>
                                <div class="col-md-9">
<input type="file" id="example-file-input" name="example-file-input">
<button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Logo | Text</h4><p>Use text INSTEAD of graphic. <strong>Overwrites uploaded logo.</strong></p>
                                </label>
                                <div class="col-md-9">
<input type="text" id="example-file-input" name="example-file-input">
                                </div>
                            </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Logo | Options</h4></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Link to Homepage
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Wrap H1 Tag on Homepage
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox2">
            <input type="checkbox" id="checkbox2" name="checkbox2" value="option1">Wrap H1 Tag on All Other Pages
        </label>
    </div>
            </div></div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Custom Favicon</h4><p>The Site Favicon.</p>
                                </label>
                                <div class="col-md-9">
<input type="file" id="example-file-input" name="example-file-input">
<button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Browse</button>
                                    <p>.ICO files Only.</p>
                                </div>
                            </div>
        <div class="form-group">
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Use 960px grid</h4>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary"><input type="checkbox" checked=""><span></span></label>
                                </div>
                            </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="content-font"><h4>Layout</h4></label>
<div class="col-md-9">
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Full Width
        </label>
    </div>
    <div class="checkbox">
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Boxed
        </label>
    </div>
            </div></div>

           
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