<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <div class="row" id="Domainprices">
        <div class="col-md-8">
        <div class="table-responsive">
            <table class="table table-borderless table-pricing">
                <thead>
                    <tr>
                        <th class="table-featured"><i class="fa fa-cloud-download"></i> Personal</th>
                        <th class="table-featured"><i class="fa fa-briefcase"></i> Blogger</th>
                        <th class="table-featured"><i class="fa fa-cloud-download"></i> Business</th>
                        <th class="table-featured"><i class="fa fa-cloud-download"></i> Pro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Free</strong> Sub-Domain</td>
                        <td><strong>Free</strong> Sub-Domain</td>
                        <td class="table-featured"><strong>Free</strong> Domain</td>
                        <td><strong>Free</strong> Domain</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>*</td>
                        <td class="table-featured">Online Store</td>
                        <td>Online Store</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>Lead Alerts</td>
                        <td class="table-featured">Lead Alerts</td>
                        <td>Lead Alerts</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>Website Stats</td>
                        <td  class="table-featured">Website Stats</td>
                        <td>Website Stats</td>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>*</td>
                        <td class="table-featured">*</td>
                        <td>Marketing Automation</td>
                    </tr>
                    <tr>
                        <td class="table-price"><strong>Free</strong> Sub-Domain</td>
                        <td class="table-price">
                            <h1>$5<br><small>per month</small>
                        </td>
                        <td class="table-featured table-price">
                            <h1>$15<br><small>per month</small></h1>
                        </td>
                        <td class="table-price">
                            <h1>$25<br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="btn btn-success" id="personalbtn"><i class="fa fa-angle-right"></i> Get Started <i class="fa fa-angle-left"></i></a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-success" id="businessbtn"><i class="fa fa-angle-right"></i> Get Started <i class="fa fa-angle-left"></i></a>
                        </td>
                        <td class="table-featured">
                            <a href="javascript:void(0)" class="btn btn-success" id="probtn"><i class="fa fa-angle-right"></i> Get Started <i class="fa fa-angle-left"></i></a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-success" id="probtn"><i class="fa fa-angle-right"></i> Get Started <i class="fa fa-angle-left"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
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