<?php
require_once 'app/init.php';

if (Auth::check()) redirect_to(App::url());

if (isset($_POST['submit']) && csrf_filter()) {

	Password::reminder($_POST['email'], @$_POST['captcha'], @$_POST['recaptcha_challenge_field']);
				
	if (Password::passes()) {
		redirect_to('reminder.php', array('reminder_sent' => true));
	}
}
?>			

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reminder</title>
</head>
<body>
	<?php if (Session::has('reminder_sent')): Session::deleteFlash(); ?>
		<h3><?php _e('main.check_email') ?></h3>
		<?php _e('main.reminder_check_email') ?>
	<?php else: ?>
		<h3><?php echo _e('main.recover_pass') ?></h3>
		
		<?php if (Password::fails()) {
			echo '<ul>';
			foreach (Password::errors()->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</ul>';
		} ?>
		
		<form action="" method="POST">
			<?php csrf_input() ?>
			
			<p>
		        <label for="reminder-email"><?php _e('main.enter_email') ?></label>
		        <input type="text" name="email" id="reminder-email" value="<?php echo set_value('email') ?>">
		    </p>
			
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
		    	<button type="submit" name="submit"><?php _e('main.continue') ?></button>
		    </p>
		</form>
	<?php endif ?>
</body>
</html>