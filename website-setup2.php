<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
$page = isset($_GET['page']) ? $_GET['page'] : '1';
$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$categoryid = DB::table('webcategories')->where('meta_value', $category)->pluck('cat_id');
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
$step = Userwebsite::get(Auth::user()->id, 'step', true);
$pagestyle = Userpages::get(Auth::user()->id, $page, 'style', true);

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