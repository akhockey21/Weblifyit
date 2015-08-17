<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
require 'src/weblifyit/customerSetup/init.php';
$user = Auth::user()->id;
$page = isset($_GET['p']) ? $_GET['p'] : 'plans';

$couponResponse = false;
$DomainSearch = null;
/*
if (isset($_POST['couponCode']) && csrf_filter()) {
    Usermeta::update($user, 'temp_couponCode', $_POST['couponCode']);
    $couponCode = Usermeta::get($user, 'temp_couponCode', true);
    
    //Verify if coupon code is added in the stripe API
    require_once('src/stripe/init.php');

    \Stripe\Stripe::setApiKey('sk_test_DBKvHRq1F3oiTwL9Y2H6nHRP');

    $testCoupon = \Stripe\Coupon::retrieve("$couponCode");
    
    $couponResponse = array();
    
     if($testCoupon['ifvalid'] == 'true'){
         if($testCoupon['percent_off'] == null) $couponResponse['coupon'] = '$' . $testCoupon['amount_off'] . ' off';
         if($testCoupon['amount_off'] == null) $couponResponse['coupon'] = $testCoupon['percent_off'] . '% off';
         Usermeta::update($user, 'temp_couponCodeExp', $testCoupon['amount_off']);
         
     }
    
}


$DomainSearch = null;
if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['domainSearch'])) {
        $domainSearchInput[] = $_POST['domainSearch'];
        if ($nc->domainsCheck('weblifyit.com') ) {
            $DomainSearch = true;
        }else{
            $DomainSearch = false;
        }
        
    }
}


/**
 * Create customer billing array. escape strings and such
 *
 * 
if (isset($_POST['finalsubmit']) && csrf_filter()) {
    
    $cc_exp = explode($_POST['cc_exp'], '/')
    //Add all inputs neededm then 
            $completeBillingArray = array(
            "email" => Auth::user()->email,
            "trial_end" => strtotime("+1 month"),
            "source" => array(
                'object' => 'card',
                'number' => $_POST['cc_num'],
                'exp_month' => $cc_exp[0],
                'exp_year' => $cc_exp[1],
                'cvc' => $_POST['cc_sid'],
                'name' => $_POST['fullName']
            )
        );

$setup = new customerSetup($user);
$setup->weblifyitSale($completeBillingArray, $_GET['plan'], $_SESSION["couponcode"]);
}
*/
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<?php
switch ($page) {
	case 'plans':
        include 'models/billing/checkoutpages/choosepricingplan.php';
	break;
	case 'choosedomain':
        include 'models/billing/checkoutpages/choosedomain.php';
    break;
	case 'paymentinfo':
        include 'models/billing/checkoutpages/customerbillinginfo.php';
    break;
	case 'complete':
        include 'models/billing/checkoutpages/completion.php';
    break;
}
 
?>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>
<script src="js/app.js"></script> 
<script src="js/plugins.js"></script> 
<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formWizardWeblifyit.js"></script> 
<script>$(function(){ FormsWizard.init(); });</script>
<script src="js/pages/uiProgress.js"></script>
<script>$(function(){ UiProgress.init(); });</script>
<?php include 'inc/template_end.php'; ?>