<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);

/**
 * This page is to continue the website builder form wizard version, this should be the main builder that the user will want to use to make it as simple and easy as possible.
 */

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
 //Usermodels::update(Auth::user()->id, 'setup_complete', 1);
}

/**
 * Form, On Certain questions, you can update the step number in the database.
 */ 

if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['bizname'])) {
                $bizname = $_POST['bizname'];
				Usermeta::update(Auth::user()->id, 'business_name', $bizname);
			}
    
    Userwebsite::update(Auth::user()->id, 'step', 3);
    header("Location: website-setup2.php");
}


$category = Userwebsite::get(Auth::user()->id, 'category', true);
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
//$step = Userwebsite::get(Auth::user()->id, 'step', true);
$step = $_GET['step'];


?>
<?php include 'inc/configweblifyit.php'; ?>
<?php include 'inc/template_start_weblifyit.php'; ?>
<?php //include 'inc/page_head_web1.php'; ?>

<!-- Page content -->
<div id="page-content">
                        <?php 
                        if($step==3){?>
    
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Header Layout</a>
</li>
<li>
<a><i class="gi gi-shop"></i> Page Layouts</a>
</li>
<li>
<a><i class="fa fa-laptop"></i> Pages Setup</a>
</li>
<li>
<a><i class="hi hi-earphone"></i> Logo and Color Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Domain Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Other Setup Options</a>
</li>
<li class="pull-right warning">
<a><i class="hi hi-eye-open warning"></i> Preview Website</a>
</li>
<li class="pull-right success">
<a><i class="hi hi-share-alt success"></i> Publish Website</a>
</li>
</ul>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Choose Your Header Layout</strong></h2>
<h4 class="clearfix text-center">Simply choose the header and menu layout you want for your website.<span class="text-success"><strong> Dont worry, you can change it later.</strong></span></h4><br>
<form action="" method="post">
<div class="row">
<div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/modern.png"></a>
</li>
</ul>
</div>
                </div>
                    
                    <div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/creative-open.png"></a>
</li>
</ul>
</div>
                </div>
                    
                    <div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/fixed.png"></a>
</li>
</ul>
</div>
                </div>
                    
                                   
                </div>
<div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="submitone">Next <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form> 
</div>
</div>
</div>
        <?php
                        }elseif($step==4){ ?>
    
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Header Layout</a>
</li>
<li class="active">
<a><i class="gi gi-shop"></i> Page Layouts</a>
</li>
<li>
<a><i class="fa fa-laptop"></i> Pages Setup</a>
</li>
<li>
<a><i class="hi hi-earphone"></i> Logo and Color Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Domain Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Other Setup Options</a>
</li>
<li class="pull-right warning">
<a><i class="hi hi-eye-open warning"></i> Preview Website</a>
</li>
<li class="pull-right success">
<a><i class="hi hi-share-alt success"></i> Publish Website</a>
</li>
</ul>
</div>
        
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Choose Your Homepage Layout</strong></h2>
<h4 class="clearfix text-center">Simply choose the homepage layout you want for your website.<span class="text-success"><strong> Dont worry, you can change it later.</strong></span></h4><br>
<form action="" method="post">
<div class="row">
<div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/modern.png"></a>
</li>
</ul>
</div>
                </div>
                    
                    <div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/creative-open.png"></a>
</li>
</ul>
</div>
                </div>
                    
                    <div class="col-md-4 col-xs-4">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/fixed.png"></a>
</li>
</ul>
</div>
                </div>
                    
                                   
                </div>
<div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="submitone">Next <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form> 
</div>
</div>
</div>
    <?php
                        }elseif($step==5){ ?>
    
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Header Layout</a>
</li>
<li class="active">
<a><i class="gi gi-shop"></i> Page Layouts</a>
</li>
<li class="active">
<a><i class="fa fa-laptop"></i> Pages Setup</a>
</li>
<li>
<a><i class="hi hi-earphone"></i> Logo and Color Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Domain Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Other Setup Options</a>
</li>
<li class="pull-right warning">
<a><i class="hi hi-eye-open warning"></i> Preview Website</a>
</li>
<li class="pull-right success">
<a><i class="hi hi-share-alt success"></i> Publish Website</a>
</li>
</ul>
</div>
<div class="row">
<div class="col-md-3">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/modern.png"></a>
</li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Page Setup: Homepage</strong></h2>
<h4 class="clearfix text-center">Please fill in the text that will be displayed on the homepage. You can choose to keep our default -category- text.<span class="text-success"><strong> Dont worry, you can change it later.</strong></span></h4><br>
<form action="" method="post">
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="maincolor">Main Website Color</label>
                                <input type="text" id="example-colorpicker" name="maincolor" class="form-control input-colorpicker colorpicker-element" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="maincolor">Main Website Color</label>
                                <input type="text" id="example-colorpicker" name="maincolor" class="form-control input-colorpicker colorpicker-element" value="">
                            </div>
                        </div>
    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-12">
    
                            <label class="control-label" for="maincolor">Image Background</label>
                            <img name="maincolor" src="http://mgaaaronsplumbing.com/wp-content/uploads/2012/05/Exceptional-sewer-drain-cleaning.jpg" style="width: 100%;">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
    <button type="button" class="btn btn-primary btn-md">Upload Image</button>
    <button type="button" class="btn btn-primary btn-md">Revert To Template Image</button>
    <button type="button" class="btn btn-primary btn-md">Choose Image</button>
    </div>
                            </div>
                        </div>
                        </div>
<div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="submitone">Next <i class="fa fa-arrow-right"></i></button>
                    </div>
                </form> 
</div>
</div>
</div>
    <?php
    }elseif($step==6){ ?>
    
    <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="active">
<a><i class="gi gi-shop"></i> Header Layout</a>
</li>
<li class="active">
<a><i class="gi gi-shop"></i> Page Layouts</a>
</li>
<li class="active">
<a><i class="fa fa-laptop"></i> Pages Setup</a>
</li>
<li>
<a><i class="hi hi-earphone"></i> Logo and Color Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Domain Setup</a>
</li>
<li>
<a><i class="gi gi-edit"></i> Other Setup Options</a>
</li>
<li class="pull-right warning">
<a><i class="hi hi-eye-open warning"></i> Preview Website</a>
</li>
<li class="pull-right success">
<a><i class="hi hi-share-alt success"></i> Publish Website</a>
</li>
</ul>
</div>
<div class="row">
<div class="block-section">
<h2 class="sub-header text-center"><strong>Page Setup: Homepage</strong></h2>
<h4 class="clearfix text-center">This information will be displayed on your website.</h4>
            <div class="col-md-6 col-md-offset-3">
                <!-- Wizard Progress Bar, functionality initialized in js/pages/formsWizard.js -->
                <div class="progress progress-striped active">
                    <div id="progress-bar-wizard" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                </div>
                </div>
                <!-- END Wizard Progress Bar --> 
                <div class="col-md-9 col-md-offset-1">
                <!-- Progress Wizard Content -->
                <form id="progress-wizard" action="" method="post" class="form-horizontal">
                    <!-- First Step -->
                    <div id="progress-first" class="step">
<div class="col-md-3">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/Homepage.png"></a>
</li>
</ul>
                    <h4 class="text-center">Page Text & Images</h4>
</div>
                    </div>
                    <div class="col-md-9"> 
                    <div class="form-group">
                            <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Main Header Text">
                            <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Sub Header Text">
                    </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-12">
    
                            <label class="control-label" for="maincolor">Image Background</label>
                            <img name="maincolor" src="http://mgaaaronsplumbing.com/wp-content/uploads/2012/05/Exceptional-sewer-drain-cleaning.jpg" style="width: 100%;">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
    <button type="button" class="btn btn-primary btn-sm">Upload Image</button>
    <button type="button" class="btn btn-primary btn-sm">Revert To Template Image</button>
    <button type="button" class="btn btn-primary btn-sm">Choose Image</button>
    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="progress-second" class="step">
<div class="col-md-3">
                <div class="content-header">
<ul class="nav-horizontal text-center">
<li class="">
<a><img src="img/webbuilder/Homepage.png"></a>
</li>
</ul>
                    <h4 class="text-center">Page Text & Images</h4>
</div>
                    </div>
                    <div class="col-md-3 text-center"> 
                    <div class="form-group">
                         <i class="gi gi-bus"></i>
                            <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Main Header Text">
                            <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Sub Header Text">
                    </div>
                    </div>
                    <div class="col-md-3 text-center"> 
                    <div class="form-group">
                         <i class="gi gi-bus"></i>
                            <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Main Header Text">
                            <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Sub Header Text">
                    </div>
                    </div>
                    <div class="col-md-3 text-center"> 
                    <div class="form-group">
                         <i class="gi gi-bus"></i>
                            <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Main Header Text">
                            <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Sub Header Text">
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
<!-- Bootstrap-Iconpicker Iconset for Glyphicon -->
<script type="text/javascript" src="js/iconset/iconset-glyphicon.min.js"></script>
<!-- Bootstrap-Iconpicker -->
<script type="text/javascript" src="js/bootstrap-iconpicker.min.js"></script>
<?php include 'inc/template_end.php'; ?>