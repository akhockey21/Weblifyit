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
                                <label class="col-md-3 control-label" for="theme-kin">
                                    <h4>Theme Skin<h4></h4>
                                    <p>Choose one of the predefined styles or set your own colors.</p>
                                </label>
                                <div class="col-md-9">
                                    <select id="theme-skin" name="theme-skin" class="form-control" size="1">
                                        <optgroup label="Theme Skins">
                                            <option value="Arial">- Custom Skin -</option>
                                            <option value="Georgia">Blue</option>
                                            <option value="Tahoma">Brown</option>
                                            <option value="Times">Chocolate</option>
                                            <option value="Trebuchet">Gold</option>
                                            <option value="Verdana">Green</option>
                                            <option value="Verdana">Olive</option>
                                            <option value="Verdana">Orange</option>
                                            <option value="Verdana">Pink</option>
                                            <option value="Verdana">Red</option>
                                            <option value="Verdana">Seagreen</option>
                                            <option value="Verdana">Violet</option>
                                            <option value="Verdana">Yellow</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Body Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
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
                    <div class="tab-pane" id="header">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Header Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Top Bar Left Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Top Bar Middle Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Top Bar Right Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Top Bar Right Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Search Bar Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Subheader Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Subheader Title Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        
                        
                        
                    <div class="tab-pane" id="menu">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Menu | Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Menu | Active Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Menu | Active Link Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Submenu | Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Submenu | Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Submenu | Hover Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Action Bar Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Overlay Menu | Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Overlay Menu | Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        
                        
                    <div class="tab-pane" id="content">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Theme Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Text Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Link Hover Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Fancy Link | Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Fancy Link | Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Fancy Link | Hover Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Fancy Link | Hover Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Note Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">List Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Dropcap & Highlight Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Highlight Section Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Hr Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Button | Style</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Button | Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Button | Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        
                        
                    <div class="tab-pane" id="footer">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Theme Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Text Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Hover Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Heading Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Footer Note Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="headings">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H1 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H2 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H3 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H4 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H5 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Heading H6 Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning pull-right"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="shortcodes">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Accordion & Tabs Active Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Blockquote Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Content Link Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Counter Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Get in Touch Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Icon Bar Hover Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Icon Box Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Image Frame Link Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">List & Feature List Icon Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Pricing Box Price Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Pricing Box Featured Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Progress Bar Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Quick Fact Number Color</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Sliding Box Title Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="example-colorpicker2">Trailer Box Subtitle Background</label>
                                <div class="col-md-6">
                                    <div class="input-group input-colorpicker colorpicker-element">
                                        <input type="text" id="example-colorpicker2" name="example-colorpicker2" class="form-control" value="#1bbae1">
                                        <span class="input-group-addon"><i style="background-color: rgb(27, 186, 225);"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-actions">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-primary pull-left"><i class="fa fa-angle-right"></i> Submit</button>
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