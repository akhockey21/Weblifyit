<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
?>
<?php include 'inc/configweblifyit.php'; ?>
<?php include 'inc/template_start_weblifyit.php'; ?>
<?php //include 'inc/page_head_web1.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li class="active">
                <a><i class="gi gi-shop"></i> Business Type</a>
            </li>
            <li>
                <a><i class="fa fa-laptop"></i> Choose Template</a>
            </li>
            <li>
                <a><i class="hi hi-earphone"></i> Business Info</a>
            </li>
            <li>
                <a><i class="gi gi-edit"></i> Feel Free To Edit</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="block-section">
                <h2 class="sub-header text-center"><strong>Choose Your Business Type</strong></h2>
                <h4 class="clearfix text-center">Simply choose your business type. Then choose from many of our customized <span class="text-success"><strong>Website Templates That Match Your Business Type.</strong></span></h4>
                <form action="" method="post">
                    <div class="form-group">
                        <select id="example-chosen" name="category" class="select-select2" data-placeholder="Your Business Type.." style="width: 100%;">
                            <option></option>
                            <option value="plumber">Plumbing</option>
                            <option value="AC-&-Heating">AC & Heating</option>
                            <option value="Computer-Repair">Computer Repair</option>
                            <option value="Bycicle-Shop">Bycicle Shop</option>
                            <option value="Auto Shop">Auto-Shop</option>
                        </select>
                    </div>
                    <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="submitone">Next <i class="fa fa-arrow-right"></i>
                        </button>
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