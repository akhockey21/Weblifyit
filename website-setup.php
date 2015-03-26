<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
$step = Userwebsite::get(Auth::user()->id, 'step', true);
if (isset($_POST['submit']) && csrf_filter()) {
    if (isset($_POST['category'])) {
        $category = $_POST['category'];
        Userwebsite::update(Auth::user()->id, 'category', true);
        Userwebsite::update(Auth::user()->id, 'step', 1);
}
 } 

if (isset($_POST['confirm']) && csrf_filter()) {
    if (isset($_POST['templateid'])) {
        $templateid = $_POST['templateid'];
        Userwebsite::update(Auth::user()->id, 'template_id', true);
        Userwebsite::update(Auth::user()->id, 'step', 2);
        header("Location: website-setup2.php");
}
 } 
if($step>=2){
    header("Location: website-setup2.php");
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head_web1.php'; ?>

<!-- Page content -->
<div id="page-content">
                        <?php 
                        if($category==false){ ?>
                    <div class="block">
                <form action="" class="form-bordered" method="post">
<div class="form-group">
<label class="col-md-4 control-label" for="example-chosen">Type of Business</label>
<div class="col-md-6">
<select id="example-chosen" name="category" class="select-chosen" data-placeholder="Your Business' Main Product or Service.." style="width: 250px; display: none;">
<option></option>
<option value="Plumbing">Plumbing</option>
<option value="AC & Heating">AC & Heating</option>
<option value="Computer Repair">Computer Repair</option>
<option value="Bycicle Shop">Bycicle Shop</option>
<option value="Auto Shop">Auto Shop</option>
</select><div class="chosen-container chosen-container-single" style="width: 100%;" title="" id="example_chosen_chosen"><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"><li class="active-result" data-option-array-index="1">Plumbing</li><li class="active-result" data-option-array-index="2">AC & Heating</li><li class="active-result" data-option-array-index="3">Computer Repair</li><li class="active-result" data-option-array-index="4">Bycicle Shop</li><li class="active-result" data-option-array-index="5">Auto Shop</li><li class="active-result" data-option-array-index="6">Construction</li></ul></div></div>
</div>
</div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Website Settings</button>
                    </div>
                </form>  </div>
        <?php
                        }elseif($category==true && $step==1){
                            $templates = DB::table('webtemplates')->get();
?>
    <div class="row">
    <?php
foreach ($templates as $web) {
    //screen shot location templates/screenshots/$category/$template_id.png
    //$template->template_id;
    $tempname = $web->template_name;
    $tempid = $web->template_id;
    $tempss = "templates/screenshots/$category/$tempid.png";
    ?>
<div class="col-md-4">
<div class="widget">
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
    <div class="widget-content form-group form-actions pull-right">
<a class="btn btn-sm btn-warning" href="<?php echo $tempss ?>" target="_blank">Preview Template</a>
<a class="btn btn-sm btn-primary" href="#confirmtemplate" data-toggle="modal" data-placement="bottom" onclick="getElementById('template-id').value='<?php echo "$tempid"; ?>'">Choose Template</a>
</div>
<h4 class="widget-content widget-content-light">
<p class="themed-color-modern"><strong><?php echo $tempname ?></strong></p>
</h4>
</div>
</div>
</div>
    <?php
}
                            ?> </div>
    <?php
                        }else{
                            continue;
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
<script src="js/pages/index.js"></script>
<script>$(function(){ Index.init(); });</script>

<?php include 'inc/template_end.php'; ?>