<?php
require_once 'app/init.php';

if (Auth::check()) redirect_to(App::url());
?>			

<?php echo View::make('header')->render() ?>

<div class="row">
	<div class="col-md-6">
		<?php if (Session::has('activation_sent')): Session::deleteFlash(); ?>
			<h3 class="page-header"><?php _e('main.check_email') ?></h3>
			<?php _e('main.activation_check_email') ?>
		<?php else: ?>
			<h3 class="page-header"><?php echo _e('main.send_activation') ?></h3>
			
			<form action="activation" class="ajax-form">
				<div class="form-group">
			        <label for="activation-email"><?php _e('main.enter_email') ?></label>
			        <input type="text" name="email" id="activation-email" class="form-control">
			    </div>
				
				<?php if (Config::get('auth.captcha')): ?>
				    <div class="form-group recaptcha">
				    	<label for="recaptcha_response_field"><?php _e('main.enter_captcha') ?></label>
						<div id="recaptcha_widget" class="recaptcha-outer" style="display:none">
							<div id="recaptcha_image" class="recaptcha-image"></div>
						    <div class="recaptcha-controls">
								<div><a href="javascript:Recaptcha.reload()" tabindex="-1"><?php _e('main.captcha_reload') ?></a> |</div>
								<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')" tabindex="-1"><?php _e('main.captcha_listen') ?></a> |</div>
								<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')" tabindex="-1"><?php _e('main.captcha_image') ?></a> |</div>
								<div><a href="javascript:Recaptcha.showhelp()" tabindex="-1"><?php _e('main.captcha_help') ?></a></div>
							</div>
							<input type="text" name="captcha" id="recaptcha_response_field" class="form-control">
						</div>
						<script type="text/javascript">
							var RecaptchaOptions = {
							    theme : 'custom',
							    custom_theme_widget: 'recaptcha_widget'
							};
						 </script>
						<script src="http://www.google.com/recaptcha/api/challenge?k=<?php echo Config::get('services.recaptcha.public_key') ?>"></script>
				    </div>
				<?php endif ?>

			    <div class="form-group">
			    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.continue') ?></button>
			    </div>
			</form>
		<?php endif ?>
	</div>
</div>

<?php echo View::make('footer')->render() ?>