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
        <div class="col-md-12">
            <div class="block">
                <p class="pull-left">Select a menu to edit: </p>
                <select id="example-select" name="example-select" class="form-control" size="1">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                </select>
                <p>or create a new menu.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div id="faq1" class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1" aria-expanded="true"><strong>Pages</strong>
</a>
</h4>
                    </div>
                    <div id="faq1_q1" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label for="example-checkbox1">
                                            <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1"> Page 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="example-checkbox2">
                                            <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2"> Page 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="example-checkbox3">
                                            <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3"> Page 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group form-actions">
                            <p class="pull-left"><a>Select All</a>
                            </p>
                            <button type="submit" class="btn btn-sm btn-danger pull-right"><i class="fa fa-power-off"></i> Add to Menu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
                    <h2><strong>Menu Structure</strong></h2>
                <p>Drag each item into the order you prefer. Click the arrow on the right of the item to reveal additional configuration options.</p>
                <div class="col-md-6">
                    <div class="block">
<div class="block-title">
<h2><strong>Page Name</strong></h2><div class="block-options pull-right">
<a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
</div>
</div>
                     <form action="page_forms_general.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                        
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="content-font">
                            <h4>Navigation label</h4>
                        </label>
                        <div class="col-md-9">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="content-font">
                            <h4>Title Atrribute</h4>
                        </label>
                        <div class="col-md-9">
                            <input type="text">
                        </div>
                         </div></form>
</div>



                    <h2><strong>Menu Settings</strong></h2>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="content-font">
                            <h4>Menu Settings</h4>
                        </label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="checkbox1">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1">Automatically Add New Pages To The Menu
                                </label>
                            </div>
                        </div>

                    </div>
                <div class="form-group form-actions">
                    <p class="pull-left"><a>Delete Menu</a>
                    </p>
                    <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-angle-right"></i> Submit</button>
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
<script src="js/pages/uiDraggable.js"></script>
<script>$(function(){ UiDraggable.init(); });</script>
<?php include 'inc/template_end.php'; ?>