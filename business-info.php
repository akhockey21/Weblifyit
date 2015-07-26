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
    if (isset($_POST['bizname'])) {
        BusinessInfo::update($user, 'name', $_POST['bizname']);
    }
    if (isset($_POST['bizphone'])) {
        BusinessInfo::update($user, 'phone', $_POST['bizphone']);
    }
    if (isset($_POST['bizemail'])) {
        BusinessInfo::update($user, 'email', $_POST['bizemail']);
    }
    if (isset($_POST['bizst'])) {
        BusinessInfo::update($user, 'street', $_POST['bizst']);
    }
    if (isset($_POST['bizcity'])) {
        BusinessInfo::update($user, 'city', $_POST['bizcity']);
    }
    if (isset($_POST['bizstate'])) {
        BusinessInfo::update($user, 'state', $_POST['bizstate']);
    }
    if (isset($_POST['bizzip'])) {
        BusinessInfo::update($user, 'zip_code', $_POST['bizzip']);
    }
    if (isset($_POST['suite_apt_num'])) {
        BusinessInfo::update($user, 'suite_apt_num', $_POST['suite_apt_num']);
    }
}
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="col-md-6">
        <div class="block">
            <h2 class="modal-title sub-header text-center">Business Information</h2>
            <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizname">Business Name</label>
                        <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name" value="Weblifyit">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizphone">Business Phone</label>
                        <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone" value="9073513079">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizemail">Business Email</label>
                        <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email" value="akbrandon.howard@live.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizst">Street Name</label>
                        <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Enter Your Business' Street Name" value="6629 Wynn Ln">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="suite_apt_num">Suite Number</label>
                        <input type="text" id="suite_apt_num" name="suite_apt_num" class="form-control" placeholder="Enter Your Suite Or Apartment Number" value="6629 Wynn Ln">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizcity">City</label>
                        <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Enter Your Business' City" value="Groveland">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizstate">State</label>
                        <input type="text" id="bizstate" name="bizstate" class="form-control" placeholder="Enter Your Business State" value="FL">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="bizzip">Zip Code</label>
                        <input type="text" id="bizzip" name="bizzip" class="form-control" placeholder="Enter Your Business Zip Code" value="34736">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-user"></i> Save Changes</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
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