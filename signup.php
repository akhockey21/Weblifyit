<?php
require_once 'app/init.php';

if (Auth::check()) redirect_to(App::url());

if (isset($_POST['submit']) && csrf_filter()) {
    Register::signup($_POST);

    if (Register::passes()) {
        if (Config::get('auth.email_activation')) {
            redirect_to('signup.php', array('signup_complete' => true));
        } else {
            Auth::login($_POST['email'], $_POST['pass1']);

            $redirect = Config::get('auth.login_redirect');
            redirect_to($redirect != '' ? $redirect : App::url());
        }
    }
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Background -->
<div id="login-background">
    <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
    <img src="img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
</div>
<!-- END Login Background -->

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <h1><i class="gi gi-flash"></i> <strong><?php echo $template['name']; ?></strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
         <?php if (Session::has('signup_complete')): Session::deleteFlash(); ?>
        <h3><?php _e('main.check_email') ?></h3>
        <?php _e('main.activation_check_email') ?>
    <?php else: ?>
        <h3><?php _e('main.signup') ?></h3>
        <!-- Show register errors -->
        <?php if (Register::fails()) {
            echo '<ul>';
            foreach (Register::errors()->all('<li>:message</li>') as $error) {
               echo $error;
            }
            echo '</ul>';
        } ?>
        <form action="" method="POST" id="form-login" class="form-horizontal form-bordered form-control-borderless">
            <?php csrf_input() ?>
            <?php if (Config::get('auth.require_username')): ?>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="signup-username" name="username" class="form-control input-lg" value="<?php echo set_value('username') ?>">
                    </div>
                    <?php endif ?>
                </div>
                <div class="input-group">
                <div class="col-xs-12">
                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                    <input type="text" id="signup-email" name="email" class="form-control input-lg" value="<?php echo set_value('email') ?>">
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="signup-pass1" name="pass1" class="form-control input-lg" autocomplete="off" value="">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-6">
                    <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                    <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                        <input type="checkbox" id="register-terms" name="register-terms">
                        <span></span>
                    </label>
                </div>
                 <?php endif ?>
                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-sm btn-success" name="submit"><i class="fa fa-plus"></i> Register Account</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                </div>
            </div>
        </form>
        <!-- END Login Form -->


    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center">
        <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->


<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>

<?php include 'inc/template_end.php'; ?>