<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = Auth::user()->id;

$setup = Usermodels::get(Auth::user()->id, 'setup_complete', true);

if($setup==false){
    //need to check each page and see what models need to be added
 Usermodels::update(Auth::user()->id, 'automation', 1);
 Usermodels::update(Auth::user()->id, 'autoreports', 1);
Usermodels::update(Auth::user()->id, 'leads', 1);
 Usermodels::update(Auth::user()->id, 'payment', 1);
 Usermodels::update(Auth::user()->id, 'website', 1);
 Usermodels::update(Auth::user()->id, 'analytics', 1);
/*
//update default web settings
    //homepage setup
Userpages::update(Auth::user()->id, 1, 'pagename', "Homepage");
Userpages::update(Auth::user()->id, 1, 'navhide', 1);
Userpages::update(Auth::user()->id, 1, 'visibility', "public");
Userpages::update(Auth::user()->id, 1, 'style', "landingpage");
    //aboutus page setup
Userpages::update(Auth::user()->id, 2, 'pagename', "About Us");
Userpages::update(Auth::user()->id, 2, 'navhide', 1);
Userpages::update(Auth::user()->id, 2, 'visibility', "public");
Userpages::update(Auth::user()->id, 2, 'style', "tallheader");
    //contactus page setup
Userpages::update(Auth::user()->id, 3, 'pagename', "Contact Us");
Userpages::update(Auth::user()->id, 3, 'navhide', 1);
Userpages::update(Auth::user()->id, 3, 'visibility', "public");
Userpages::update(Auth::user()->id, 3, 'style', "shortheader");
 */   
    
 Usermodels::update(Auth::user()->id, 'setup_complete', 1);
}

if (isset($_POST['submitone']) && csrf_filter()) {
    if (isset($_POST['category'])) {
        $category = str_replace(" ", "-", $_POST['category']);
        BusinessInfo::update(Auth::user()->id, 'business_category', $category);
        WebsiteSettings::update(Auth::user()->id, 'step', 1);
}
 }  

if (isset($_POST['confirm']) && csrf_filter()) {
    if (isset($_POST['templateid'])) {
        $templateid = $_POST['templateid'];
        WebsiteSettings::update(Auth::user()->id, 'template_id', $templateid);
        WebsiteSettings::update(Auth::user()->id, 'step', 2);
        //header("Location: website-setup2.php");
}
 }


if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['bizname'])) { 
                $bizname = $_POST['bizname'];
				BusinessInfo::update(Auth::user()->id, 'name', $bizname);
			} 
     if (isset($_POST['bizphone'])) {
                $bizphone = $_POST['bizphone'];
				BusinessInfo::update(Auth::user()->id, 'phone', $bizphone);
			} 
     if (isset($_POST['bizemail'])) {
                $bizemail = $_POST['bizemail'];
				BusinessInfo::update(Auth::user()->id, 'email', $bizemail);
			} 
     if (isset($_POST['bizst'])) {
                $bizst = $_POST['bizst'];
				BusinessInfo::update(Auth::user()->id, 'street', $bizst);
			}
     if (isset($_POST['bizcity'])) {
                $bizcity = $_POST['bizcity'];
				BusinessInfo::update(Auth::user()->id, 'city', $bizcity);
			} 
     if (isset($_POST['bizstate'])) {
                $bizstate = $_POST['bizstate'];
				BusinessInfo::update(Auth::user()->id, 'state', $bizstate);
			} 
     if (isset($_POST['bizzip'])) {
                $bizzip = $_POST['bizzip'];
				BusinessInfo::update(Auth::user()->id, 'zip_code', $bizzip);
			}
        PagesManage::update(Auth::user()->id, 1, 'page_name', "Homepage");
    
    WebsiteSettings::update(Auth::user()->id, 'step', 3);
    header("Location: dashboard.php");
}


$category = BusinessInfo::get(Auth::user()->id, 'business_category', true);
$domainsetup = WebsiteSettings::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = WebsiteSettings::get(Auth::user()->id, 'usesdomain', true);
$step = WebsiteSettings::get(Auth::user()->id, 'step', true);
if($step>=3){
    header("Location: website-setup2.php");
}

?>
<?php include 'inc/configweblifyit.php'; ?>
<?php include 'inc/template_start_weblifyit.php'; ?>
<?php //include 'inc/page_head_web1.php'; ?>

<!-- Page content -->
<div id="page-content">
                        <?php 
                        if($category==false){ ?>
    
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
<a><i class="gi gi-edit"></i> Edit/Publish Website</a>
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
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="submitone">Next <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form> 
</div>
</div>
</div>
        <?php
                        }elseif($category==true && $step==1){
                            $templates = DB::table('global_themes')->get();
?>
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Business Type</a>
</li>
<li class="active">
<a><i class="fa fa-laptop"></i> Choose Theme</a>
</li>
<li>
<a><i class="hi hi-earphone"></i> Business Info</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Edit/Publish Website</a>
</li>
</ul>
</div>
    <div class="row">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Choose Your Website's Theme</strong></h2>
<h4 class="clearfix text-center">Don't worry, you can change it later.</h4>
    <?php
foreach ($templates as $web) {
    //screen shot location templates/screenshots/$category/$template_id.png
    //$template->template_id;
    $tempname = $web->template_name;
    $tempid = $web->template_id;
    $tempss = "templates/screenshots/template_images/$tempid.png";
    ?>
<div class="col-md-4">
<div class="widget">
<div class="widget-simple">
<h4 class="widget-content widget-content-light themed-color-modern text-center"><strong><?php echo $tempname ?></strong></h4>
</div>
<div class="widget-extra-full themed-background-modern">
<div id="widget-carousel3" class="carousel slide remove-margin">
<div class="carousel-inner">
<div class="active item">
<img src="<?php echo $tempss ?>" alt="image">
</div>
</div>
</div>
</div>
<div class="widget-simple">
    <div class="widget-content form-group form-actions text-center">
<a class="btn btn-sm btn-warning" href="<?php echo $tempss ?>" target="_blank">Preview Theme</a>
<a class="btn btn-sm btn-primary" href="#confirmtemplate" data-toggle="modal" data-placement="bottom" onclick="getElementById('template-id').value='<?php echo "$tempid"; ?>'">Choose Theme</a>
</div>
</div>
</div>
</div>
    <?php
}
    ?> </div></div>
    <?php
                        }elseif($category==true && $step==2){
                            ?>
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Business Type</a>
</li>
<li class="active">
<a><i class="fa fa-laptop"></i> Choose Template</a>
</li>
<li class="active">
<a><i class="hi hi-earphone"></i> Business Info</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Edit/Publish Website</a>
</li>
</ul>
</div>
    <div class="row">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Business Information</strong></h2>
<h4 class="clearfix text-center">This information will be displayed on your website.</h4>
            <div class="col-md-6 col-md-offset-3">
                <!-- Wizard Progress Bar, functionality initialized in js/pages/formsWizard.js -->
                <div class="progress progress-striped active">
                    <div id="progress-bar-wizard" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                </div>
                <!-- END Wizard Progress Bar --> 

                <!-- Progress Wizard Content -->
                <form id="progress-wizard" action="" method="post" class="form-horizontal">
                    <!-- First Step -->
                    <div id="progress-first" class="step">
                        <h2>Business Address:</h2>
                        
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Street Name">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div> 
                        <div class="input-group">
                            <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="City">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                            <div class="input-group">
                            <input type="text" id="bizzip" name="bizzip" class="form-control" placeholder="Zip Code">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" id="bizstate" name="bizstate" class="form-control" placeholder="State">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="progress-second" class="step">
                         <h2>Business Contact Information:</h2>
                    <div class="form-group">
                            <label class="control-label" for="bizname">Business Name</label>
                        <div class="input-group">
                            <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Business Name">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                            <label class="control-label" for="bizemail">Business Email</label>
                        <div class="input-group">
                            <input type="email" id="bizemail" name="bizemail" class="form-control" placeholder="Business Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                            <label class="control-label" for="bizphone">Business Phone</label>
                        <div class="input-group">
                            <input type="number" id="bizphone" name="bizphone" class="form-control" placeholder="Business Phone Number">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                        </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <div id="progress-third" class="step">
                         <h2>Website Pages:</h2>
                        <div class="form-group">
<label class="col-md-4 control-label"><h4>Select Each Page You Want On Your Website</h4></label>
<div class="col-md-8">
<label class="checkbox-inline" for="aboutus">
<input type="checkbox" id="example-inline-checkbox1" name="aboutus" value="1"> About Us
</label>
<label class="checkbox-inline" for="services">
<input type="checkbox" id="example-inline-checkbox2" name="services" value="1"> Services
</label>
<label class="checkbox-inline" for="contactus">
<input type="checkbox" id="example-inline-checkbox3" name="contactus" value="1"> Contact Us
</label>
</div> 
</div>
                    </div>
                    <!-- END Third Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions text-center">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next3" value="Next" name="submit">
                    </div> 
                    <!-- END Form Buttons -->
                </form>
                <!-- END Progress Wizard Content -->
    </div></div></div>
    <?php
                        }
    ?>
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