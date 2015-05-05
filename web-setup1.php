<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
$home1 = Templatetext::get(1, 'home_2', true);

if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['domain'])) {
        $domain = $_POST['domain'];
        $path = "userwebsites/web/$domain/";
        if (file_exists($path)) {
   //make message pop up saying the domain is taken.
} else {
    Userwebsite::update(Auth::user()->id, 'sub_domain_name', $domain);
    Userwebsite::update(Auth::user()->id, 'path', $path);
    mkdir("$path"); 
}
 } 
}

?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head_web.php'; ?>

<!-- Page content -->
<div id="page-content">
<div class="row">
	<div class="col-md-2">
        <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2><?php echo $home1 ?>Website Settings:</h2>
                </div>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="?p=step1">Logo & Colors</a></li>
			<li><a href="?p=step2">Business Information</a></li>
			<li><a href="?p=step3">Choose Template</a></li>
			<li><a href="?p=preview">Preview Website</a></li>
            <div class="form-group form-actions">
<a class="btn btn-sm btn-warning" href="web-preview.php" target="_blank"><i class="fa fa-repeat"></i> Preview</a>
<a class="btn btn-sm btn-primary" href="web-publish.php" target="_blank"><i class="fa fa-check"></i> Publish</a>
</div>
		</ul>
	</div>
    </div>
    
    
	<div class="col-md-4">  
		<h3 class="page-header">Website</h3>
                    <div class="block">
                <!-- Example Form Title -->
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="domain" name="domain" class="form-control" placeholder="YourDomain">
                            <span class="input-group-addon">.Weblifyit.com</span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Website Settings</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
    </div>
    </div>
</div>

<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/index.js"></script>
<script>$(function(){ Index.init(); });</script>

<?php include 'inc/template_end.php'; ?>