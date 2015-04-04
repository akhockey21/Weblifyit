<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
$page = isset($_GET['p']) ? $_GET['page'] : '1';
$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
$step = Userwebsite::get(Auth::user()->id, 'step', true);

//get website info
$bizName = Usermeta::get(Auth::user()->id, 'business_name', true);
$bizPhone = Usermeta::get(Auth::user()->id, 'company_busines_phone', true);
$bizEmail = Usermeta::get(Auth::user()->id, 'company_email', true);
$bizSt = Usermeta::get(Auth::user()->id, 'company_address_st', true);
$bizCity = Usermeta::get(Auth::user()->id, 'company_address_city', true);
$bizState = Usermeta::get(Auth::user()->id, 'company_address_state', true);
$bizZip = Usermeta::get(Auth::user()->id, 'company_address_zip', true);
$bizYears = Usermeta::get(Auth::user()->id, 'company_years_in_business', true);

$logotext = Userwebsite::get(Auth::user()->id, 'logotext', true);
$uselogo = Userwebsite::get(Auth::user()->id, 'uselogo', true);
$webdescription = Userwebsite::get(Auth::user()->id, 'meta_description', true);
$webtitle = Userwebsite::get(Auth::user()->id, 'title', true); 
$maincolor = Userwebsite::get(Auth::user()->id, 'main_color', true); 
$sidecolor = Userwebsite::get(Auth::user()->id, 'side_color', true);
?> 
<?php include 'inc/configweb.php'; ?>
<?php include 'inc/template_start_web.php'; ?>
<?php include 'inc/page_head_web2.php'; ?>

<!-- Page content -->
<div id="page-content">

</div>
<!-- END Page Content -->

<?php include 'inc/footer_builder.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script> 

<!-- Load and execute javascript code used only in this page --> 
<script src="js/pages/formsWizard1.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>

<?php include 'inc/template_end.php'; ?>