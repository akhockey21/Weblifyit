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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup</title>
</head>
<body>
	<?php if (Session::has('signup_complete')): Session::deleteFlash(); ?>
		<h3><?php _e('main.check_email') ?></h3>
		<?php _e('main.activation_check_email') ?>
	<?php else: ?>
		<h3><?php _e('main.signup') ?></h3>

		<?php if (Register::fails()) {
			echo '<ul>';
			foreach (Register::errors()->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</ul>';
		} ?>

		<form action="" method="POST">
			<?php csrf_input() ?>

			<?php if (Config::get('auth.require_username')): ?>
				<p>
			        <label for="signup-username"><?php _e('main.username') ?></label>
			        <input type="text" name="username" id="signup-username" value="<?php echo set_value('username') ?>">
			    </p>
			<?php endif ?>

		    <p>
		        <label for="signup-email"><?php _e('main.email') ?></label>
		        <input type="text" name="email" id="signup-email" value="<?php echo set_value('email') ?>">
		    </p>

		    <p>
		        <label for="signup-pass1"><?php _e('main.password') ?></label>
		        <input type="password" name="pass1" id="signup-pass1" autocomplete="off" value="">
		    </p>

		    <!--
		    <p>
		        <label for="signup-pass2"><?php _e('main.password_confirmation') ?></label>
		        <input type="password" name="pass2" id="signup-pass2" autocomplete="off">
		    </p>
		    -->

		    <?php echo UserFields::build('signup') ?>

			<?php if (Config::get('auth.captcha')): ?>
			    <p class="recaptcha">
			    	<label for="recaptcha_response_field"><?php _e('main.enter_captcha') ?></label>
					<div id="recaptcha_widget" class="recaptcha-outer" style="display:none">
						<div id="recaptcha_image" class="recaptcha-image"></div>
					    <div class="recaptcha-controls">
							<div><a href="javascript:Recaptcha.reload()" tabindex="-1"><?php _e('main.captcha_reload') ?></a> |</div>
							<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')" tabindex="-1"><?php _e('main.captcha_listen') ?></a> |</div>
							<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')" tabindex="-1"><?php _e('main.captcha_image') ?></a> |</div>
							<div><a href="javascript:Recaptcha.showhelp()" tabindex="-1"><?php _e('main.captcha_help') ?></a></div>
						</div>
						<input type="text" name="captcha" id="recaptcha_response_field">
					</div>
					<script type="text/javascript">
						var RecaptchaOptions = {
						    theme : 'custom',
						    custom_theme_widget: 'recaptcha_widget'
						};
					 </script>
					<script src="https://www.google.com/recaptcha/api/challenge?k=<?php echo Config::get('services.recaptcha.public_key') ?>"></script>
			    </p>
			<?php endif ?>

			<p>
				<button type="submit" name="submit"><?php _e('main.signup') ?></button>
			</p>
		</form>

		<?php if (count(Config::get('auth.providers'))): ?>
            <p><?php _e('main.login_with2') ?></p>
           
           <p>
            	<?php foreach (Config::get('auth.providers', array()) as $key => $provider): ?>
            		<a href="<?php echo App::url("oauth.php?provider={$key}") ?>"><?php echo $provider ?></a>
            	<?php endforeach ?>
            </p>
        <?php endif ?>
	<?php endif ?>
</body>
</html>