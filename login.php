<?php
// Init file
require_once 'app/init.php';

// Check if is already logged in
if (Auth::check()) redirect_to(App::url());

// Form submit
if (isset($_POST['submit']) && csrf_filter()) {
    Auth::login($_POST['email'], $_POST['password'], isset($_POST['remember']));

    if (Auth::passes()) {
        $url = Config::get('auth.login_redirect');
        $url = empty($url) ? App::url() : $url;
        redirect_to($url);
    }
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<!-- Login Full Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="img/placeholders/backgrounds/login_full_bg.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
<!-- END Login Full Background -->

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <h1><i class="gi gi-flash"></i> <strong><?php _e('main.login') ?></strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        	<?php if (Auth::fails()) {
		echo '<ul>';
		foreach (Auth::errors()->all('<li>:message</li>') as $error) {
		   echo $error;
		}
		echo '</ul>';
	} ?>
        <form action="" method="POST" id="form-login" class="form-horizontal form-bordered form-control-borderless">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control input-lg" value="<?php echo set_value('email') ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-4">
                    <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                        <input type="checkbox" id="login-remember-me" name="remember" value="1" <?php echo set_checkbox('remember', '1') ?>>
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-8 text-right">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <a href="reminder.php" id="link-reminder-login"><small>Forgot password?</small></a> -
                    <a href="activation.php" id="link-register-login"><small>Resend Activation</small></a>
                </div>
            </div>
        </form>
        <!-- END Login Form -->
<?php if (count(Config::get('auth.providers'))): ?>
	    <p><?php _e('main.login_with2') ?></p>
	    
	    <p>
	    	<?php foreach (Config::get('auth.providers', array()) as $key => $provider): ?>
	    		<a href="<?php echo App::url("oauth.php?provider={$key}") ?>"><?php echo $provider ?></a>
	    	<?php endforeach ?>
	    </p>
	<?php endif ?>
    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->


<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>

<?php include 'inc/template_end.php'; ?>