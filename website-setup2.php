<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;

include 'models/website.php';
 
$user = User::find(Auth::user()->id);
$page = isset($_GET['page']) ? $_GET['page'] : '1';
$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$categoryid = DB::table('webcategories')->where('meta_value', $category)->pluck('cat_id');
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
$step = Userwebsite::get(Auth::user()->id, 'step', true);
$pagestyle = Userpages::get(Auth::user()->id, $page, 'style', true); 
$pageStyleLayout = Userpages::get(Auth::user()->id, $page, 'pagelayout', true);

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
$todoList = Userwebsite::get(Auth::user()->id, 'todo', true);
?> 
<?php include 'inc/configweb.php'; ?>
<?php include 'inc/template_start_web.php'; ?>
<?php include 'inc/page_head_web2.php'; ?>

<!-- Page content -->
<div id="page-content">
<div class="content-header">
<ul class="nav-horizontal text-center" data-toggle="tabs">
<li class="active">
<a href="#dashboard"><i class="gi gi-home"></i> Main Dashboard</a>
</li>
<li>
<a href="#edit-page-text" onclick="getElementById('newpageidval1').value='<?php echo "$total"; ?>'"><i class="gi gi-edit"></i> Edit Page Text</a>
</li>
<li>
<a href="#logo-color-options"><i class="gi gi-show_big_thumbnails"></i> Logo & Color options</a>
</li>
<li>
<a href="#business-information"><i class="gi gi-shop"></i> Business Information</a>
</li>
<li>
<a href="#search-engine-settings"><i class="gi gi-zoom_out"></i> Search Engine Settings</a>
</li>
<li>
<a href="#domain-settings"><i class="gi gi-cogwheels"></i> Domain Settings</a>
</li>
<li>
<a href="#change-page-images"><i class="gi gi-picture"></i> Change Page Images</a>
</li>
</ul>
</div>
    
<div class="row">
<div class="tab-content">
<div class="tab-pane active" id="dashboard">
<div class="col-md-2">
<img src="img/arrow-web.png" class="pull-right" style="width: 60%;">
</div>
<div class="col-md-7">
<div class="block">
<div class="modal-header text-center"> 
    <h2 class="modal-title"><strong>Welcome To Your New Website</strong></h2>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-6">
    <p>Morbi et nibh at nisi pretium ultricies. Praesent nec est vel mauris lobortis luctus quis in libero. Quisque et lacus quis mauris mattis molestie. Pellentesque purus orci, malesuada a ex eu, scelerisque sollicitudin nulla. In hac habitasse platea dictumst. Aliquam nec laoreet arcu. In dictum quam non nisi porttitor, sit amet lobortis sem cursus. Aliquam sodales nunc eget magna consectetur, in rhoncus massa mollis. Sed tempus scelerisque ipsum, ut posuere neque porttitor interdum. Nunc sit amet dui magna. Donec ullamcorper nulla nec velit luctus, eget sollicitudin ex dapibus. Ut sit amet leo efficitur, sodales metus non, feugiat erat. In in blandit diam.</p>
    <button type="button" class="btn btn-primary btn-lg">Start Building Your Website Here</button>
    </div>
<div class="col-md-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/e-ORhEE9VVg" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>
</div>
</div>
<div class="block">
<div class="modal-header"> 
    <h4 class="modal-title">Your Website:</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-12">
    <p>Change Template     Search Engine Visibility Wizard</p>
    </div>
    </div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="edit-page-text">
<div class="col-md-3">
<div class="block">
<h4 class="sub-header">Change Page:</h4>
<ul class="nav nav-pills nav-stacked">    
<?php

$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id; ?>
<li <?php if($page==$filter_result->page_id){echo "class=\"active\"";} ?>>
<a href="?page=<?php echo $filter_result->page_id; ?>" id="<?php echo $filter_result->page_id; ?>"><span class="text-center"><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></span></a>
</li>
                        <?php
}
$tot = end($pageids);
$total = $tot + 1;
?>    
</ul>
</div>  
</div>
<div class="col-md-6">
<div class="tab-pane active">
<div class="block">
<div class="modal-header text-center"> 
<h2 class="modal-title">Page Text Wizard: <strong><?php echo Userpages::get(Auth::user()->id, $page, 'pagename', true); ?></strong></h2>
</div>
<div class="modal-body">
<?php include 'inc/web/pagetextedit.php'; ?> 
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="logo-color-options">
<div class="col-md-1">
<img src="img/arrow-web.png" class="pull-right" style="width: 60%;">
</div>
<div class="col-md-4">
<div class="block">
<h2 class="modal-title sub-header text-center">Color options</h2>
<form action="" method="post" class="form-horizontal">
<div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="maincolor">Main Website Color</label>
                                <input type="text" id="example-colorpicker" name="maincolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $maincolor?>">
                            </div>
                        </div>
<div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="sidecolor">Side Website Color</label>
                                <input type="text" id="example-colorpicker" name="sidecolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $sidecolor ?>"> 
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
<div class="col-md-4">
<div class="tab-pane active">
<div class="block"> 
<h2 class="modal-title sub-header text-center">Logo Settings</h2>
<form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label">Use Logo Text Instead of Logo Image?</label>
                            </div>
                            <div class="col-md-12">
                                <label class="switch switch-primary" for="uselogo">
                                    <input type="checkbox" id="uselogo" name="uselogo" value="1">
                                    <span data-toggle="tooltip"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="logotext">Logo Text</label>
                                <input type="text" id="logotext" name="logotext" class="form-control" placeholder="Logo Text" value="<?php echo $logotext ?>">
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
    
    <form action="models/web/upload.php" class="dropzone dz-clickable themed-background"><div class="dz-default dz-message"><span>Drop Logo Here or click To Upload</span></div>
    </form></div></div></div>
<div class="tab-pane" id="business-information">
<div class="col-md-offset-1 col-md-2">
<img src="img/arrow-web.png" class="pull-right" style="width: 60%;">
</div>
<div class="col-md-6">
<div class="block">
<h2 class="modal-title sub-header text-center">Business Information</h2>
<form action="" method="post" class="form-horizontal">
<div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizname">Business Name</label>
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name" value="<?php echo $bizName ?>">
                            </div>
                        </div>
  <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizphone">Business Phone</label>
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone" value="<?php echo $bizPhone ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizemail">Business Email</label>
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email" value="<?php echo $bizEmail ?>">
                            </div>
                    </div>
    <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizst">Street Name</label>
                                <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Enter Your Business' Street Name" value="<?php echo $bizSt ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizcity">City</label>
                                <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Enter Your Business' City" value="<?php echo $bizCity ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizstate">State</label>
                                <input type="text" id="bizstate" name="bizstate" class="form-control" placeholder="Enter Your Business State" value="<?php echo $bizState ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizzip">Zip Code</label>
                                <input type="text" id="bizzip" name="bizzip" class="form-control" placeholder="Enter Your Business Zip Code" value="<?php echo $bizZip ?>">
                            </div>
                        </div>
<div class="form-group form-actions">
<div class="col-md-9 col-md-offset-3">
<button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-user"></i> Save Changes</button>
<button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
</div>
</div>
</form>
</div></div></div>
<div class="tab-pane" id="search-engine-settings">
<div class="col-md-offset-1 col-md-2">
<img src="img/arrow-web.png" class="pull-right" style="width: 60%;">
</div>
<div class="col-md-6"><div class="block">
<h2 class="modal-title sub-header text-center">Search Engine Settings</h2>
<form action="" method="post" class="form-horizontal">
<div class="form-group"> 
                            
                            <div class="col-md-12">
                                <label class="control-label" for="webtitle">Website Title</label>
                                <input type="text" id="webtitle" name="webtitle" class="form-control" placeholder="Website Name" value="<?php echo $webtitle ?>"> 
                            </div>
                        </div>
  <div class="form-group">
                            
                            <div class="col-md-12">
                            <label class="control-label" for="webdescription">Website Description</label>
                                <textarea id="webdescription" name="webdescription" class="form-control" placeholder="Enter Your Website Description"><?php echo $webdescription ?></textarea>
                            </div>
                        </div>
<div class="form-group form-actions">
<div class="col-md-9 col-md-offset-3">
<button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-user"></i> Save Changes</button>
<button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
</div>
</div>
</form>
</div></div></div>
<div class="tab-pane" id="domain-settings">
<div class="col-md-offset-1 col-md-2">
<img src="img/arrow-web.png" class="pull-right" style="width: 60%;">
</div>
<div class="col-md-6">
<div class="block">
            <div class="modal-header text-center">
                <h2 class="modal-title">Publish Website</h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body"><?php
                if($domainsetup==false){
                include 'inc/web/domainsetup.php';
                }else{
                include 'inc/web/publishwebsite.php';
                }
                ?> 
    </div></div></div></div>
<div class="tab-pane" id="change-page-images">
<div class="col-md-2">
<div class="block">
<h4 class="sub-header">Change Page:</h4>
<ul class="nav nav-pills nav-stacked">    
<?php

$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id; ?>
<li <?php if($page==$filter_result->page_id){echo "class=\"active\"";} ?>>
<a href="?page=<?php echo $filter_result->page_id; ?>" id="<?php echo $filter_result->page_id; ?>"><span class="text-center"><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></span></a>
</li>
                        <?php
}
$tot = end($pageids);
$total = $tot + 1;
?>    
</ul>
</div>  
</div>
<div class="col-md-7">
<div class="block">
<div class="modal-header text-center"> 
    <h2 class="modal-title">Change Page Images:</h2>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-4">
    <h4><strong>Image Location</strong></h4>
    <p>Morbi et nibh at nisi pretium ultricies. Praesent nec est vel mauris lobortis luctus quis in libero. Quisque et lacus quis mauris mattis molestie. Pellentesque purus orci, malesuada a ex eu, scelerisque sollicitudin nulla. In hac habitasse platea dictumst.</p>
    </div>
<div class="col-md-8">
    <img src="http://mgaaaronsplumbing.com/wp-content/uploads/2012/05/Exceptional-sewer-drain-cleaning.jpg" style="width: 100%;">
    </div>
    </div>
<div class="row">
<div class="col-md-12">
    <button type="button" class="btn btn-primary btn-md">Upload Image</button>
    <button type="button" class="btn btn-primary btn-md">Revert To Template Image</button>
    <button type="button" class="btn btn-primary btn-md">Choose Image</button>
    </div>
    </div>
    <hr>
<div class="row">
<div class="col-md-4">
    <h4><strong>Image Location</strong></h4>
    <p>Morbi et nibh at nisi pretium ultricies. Praesent nec est vel mauris lobortis luctus quis in libero. Quisque et lacus quis mauris mattis molestie. Pellentesque purus orci, malesuada a ex eu, scelerisque sollicitudin nulla. In hac habitasse platea dictumst.</p>
    </div>
<div class="col-md-8">
    <img src="http://mgaaaronsplumbing.com/wp-content/uploads/2012/05/Exceptional-sewer-drain-cleaning.jpg" style="width: 100%;">
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
</div></div>
</div>
<?php if($todoList==true){?>
<div class="col-md-3 pull-right">
<div class="block">
<div class="block-title">
<h2><strong>To-Do</strong> List</h2>
</div>
<div class="list-group" data-toggle="tabs">
<?php
    $listItems = explode(";", $todoList);
    foreach ($listItems as $listItem){
       $listItem = explode(",", $listItem);
        ?>
    <a href="#logo-color-options" class="list-group-item">
<span class="badge"><i class="hi hi-ok"></i></span>
<h4 class="list-group-item-heading"><?php 
        if($listItem[1]==1){
            echo '<strike>' . $listItem[0] . '</strike>';
        }else{
           echo $listItem[0]; 
        }
        
?></h4>
</a>
    <?php
    }
    

?>
</div>
</div>
<div class="block">
<div class="block-title">
<h2><i class="gi gi-circle_question_mark"></i><strong>Need Help On This Page?</strong></h2>
</div>
</div>
</div><?php } ?>
</div>
    
    
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
<?php
/*
if($pagestyle=="homepage"){
    ?>
<script src="js/pages/formWizardHomepage.js"></script>
<?php
}elseif($pagestyle=="contactus"){
    ?>
<script src="js/pages/formwizardContact.js"></script>
<?php
}elseif($pagestyle=="aboutus"){
    ?>
<script src="js/pages/formwizardabout.js"></script>
<?php
}elseif($pagestyle=="services"){
    ?>
<script src="js/pages/formwizardservices.js"></script> 
<?php
}elseif($pagestyle=="specificservice"){
    ?>
<script src="js/pages/formwizardspecificservice.js"></script>
<?php
}elseif($pagestyle=="informational"){
    ?>
<script src="js/pages/formwizardinfopage.js"></script>
<?php
}else{
    //There is an error, no page style. Maybe show warning?
}
*/
?>
<script type="text/javascript">
/*
 *  Document   : formsWizard.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Wizard page
 */

var FormsWizard = function() {

    return {
        init: function() {
            /*
             *  Jquery Wizard, Check out more examples and documentation at http://www.thecodemine.org
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Progress Wizard */
            $('#progress-wizard').formwizard({focusFirstInput: true, disableUIStyles: true, inDuration: 0, outDuration: 0});

            <?php
$questions = DB::table('templatetextquestions')->where('style', $pagestyle)->get();
$question_steps = count($questions);
$question_percent = 100/$question_count;
?>
            // Get the progress bar and change its width when a step is shown
            var progressBar = $('#progress-bar-wizard');
            progressBar
                .css('width', '<?php echo $question_percent ?>%')
                .attr('aria-valuenow', '<?php echo $question_percent ?>');

            $("#progress-wizard").bind('step_shown', function(event, data){
                
		if (data.currentStep === 'progress-1') {
                    progressBar
                        .css('width', '<?php echo $question_percent ?>%')
                        .attr('aria-valuenow', '<?php echo $question_percent ?>')
                        .removeClass('progress-bar-warning progress-bar-success progress-bar-info')
                        .addClass('progress-bar-<?php if($question_percent<=25){
        echo "danger";
    }elseif($question_percent<=50){
        echo "warning";
    } 
    elseif($question_percent<=75){
        echo "info";
    } 
    elseif($question_percent<=88){
        echo "success";
    }else{
        continue;
    } 
        ?>');
                }
                <?php 
    //do a while loop to generate the rest of the steps.  
                $step_counter = 2;
while($step_counter<=$question_steps){
    ?>
                
                else if (data.currentStep === 'progress-<?php echo $step_counter ?>') {
                    progressBar
                        .css('width', '<?php echo $step_counter * $question_percent; ?>%')
                        .attr('aria-valuenow', '<?php echo $step_counter * $question_percent; ?>')
                        .removeClass('progress-bar-danger progress-bar-success progress-bar-info progress-bar-warning')
                        .addClass('progress-bar-<?php if($step_counter * $question_percent<=25){
        echo "danger";
    }elseif($step_counter * $question_percent<=50){
        echo "warning";
    } 
    elseif($step_counter * $question_percent<=75){
        echo "info";
    } 
    elseif($step_counter * $question_percent<=88){
        echo "success";
    }else{
        echo "success";
    } 
                                     
                                     ?>');
                                  }
                <?php
    $step_counter++; 
}
                ?>
            }); 

            /* Initialize Basic Wizard */
            $('#basic-wizard').formwizard({disableUIStyles: true, inDuration: 0, outDuration: 0});

            /* Initialize Advanced Wizard with Validation */
            $('#advanced-wizard').formwizard({
                disableUIStyles: true,
                validationEnabled: true,
                validationOptions: {
                    errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                    errorElement: 'span',
                    errorPlacement: function(error, e) {
                        e.parents('.form-group > div').append(error);
                    },
                    highlight: function(e) {
                        $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                        $(e).closest('.help-block').remove();
                    },
                    success: function(e) {
                        // You can use the following if you would like to highlight with green color the input after successful validation!
                        e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                        e.closest('.help-block').remove();
                    },
                    rules: {
                        val_username: {
                            required: true,
                            minlength: 2
                        },
                        val_password: {
                            required: true,
                            minlength: 5
                        },
                        val_confirm_password: {
                            required: true,
                            equalTo: '#val_password'
                        },
                        val_email: {
                            required: true,
                            email: true
                        },
                        val_terms: {
                            required: true
                        }
                    },
                    messages: {
                        val_username: {
                            required: 'Please enter a username',
                            minlength: 'Your username must consist of at least 2 characters'
                        },
                        val_password: {
                            required: 'Please provide a password',
                            minlength: 'Your password must be at least 5 characters long'
                        },
                        val_confirm_password: {
                            required: 'Please provide a password',
                            minlength: 'Your password must be at least 5 characters long',
                            equalTo: 'Please enter the same password as above'
                        },
                        val_email: 'Please enter a valid email address',
                        val_terms: 'Please accept the terms to continue'
                    }
                },
                inDuration: 0,
                outDuration: 0
            });

            /* Initialize Clickable Wizard */
            var clickableWizard = $('#clickable-wizard');

            clickableWizard.formwizard({disableUIStyles: true, inDuration: 0, outDuration: 0});

            $('.clickable-steps a').on('click', function(){
                var gotostep = $(this).data('gotostep');

                clickableWizard.formwizard('show', gotostep);
            });
        }
    };
}();
</script>
<script>$(function(){ FormsWizard.init(); });</script>
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>