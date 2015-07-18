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
                <p class="pull-left">Select a menu to edit: </p><select id="example-select" name="example-select" class="form-control" size="1">
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
            <div class="block">
                <div class="block-title">
                    <h3 class="pull-left">Menu Name</h3><input type="text" value="Main Menu"> <button type="submit" class="btn btn-sm btn-danger pull-right"><i class="fa fa-power-off"></i> Save Menu</button>
                </div>
                <h2>Menu Structure</h2>
                <p>Drag each item into the order you prefer. Click the arrow on the right of the item to reveal additional configuration options.</p>
                
                <hr>
                <h2>Menu Settings</h2>
            </div><div class="form-group form-actions">
            <p class="pull-left"><a>Delete Menu</a></p>
<button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-angle-right"></i> Submit</button>
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