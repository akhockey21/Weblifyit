<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$page = isset($_GET['p']) ? $_GET['p'] : 'account';

switch ($page) {
	case 'account':
		$user = Auth::user()->id;
		
		if (isset($_POST['submit']) && csrf_filter()) {
			$data = array('email' => $_POST['email']);
			$rules = array('email' => 'required|email|max:100|unique:users,email,'.$user->id);

		    if (Config::get('auth.require_username') && Config::get('auth.username_change')) {
		    	$data['username'] = $_POST['username'];
		    	$rules['username'] = 'required|min:3|max:50|alpha_dash|unique:users,username,'.$user->id;
		    }

		    $validator = Validator::make($data, $rules);

			if ($validator->passes()) {
				$user->email = $_POST['email'];

				if (Config::get('auth.require_username') && Config::get('auth.username_change')) {
					$user->username = $_POST['username'];
				}

				if ($user->save()) {
					if (isset($_POST['locale'])) {
						$locale = $_POST['locale'];
						$locales = Config::get('app.locales');

						if (array_key_exists($locale, $locales)) {
							Usermeta::update($user->id, 'locale', $locale);
						}
					}

					redirect_to('?p=account', array('updated' => true));
				} else {
					$errors = new MessageBag(array('error' => trans('errors.dbsave')));
				}
			}  else {
				$errors = $validator->errors();
			}
		}
	break;

	case 'password':
		$user = Auth::user()->id;

		if (isset($_POST['submit']) && csrf_filter()) {
			$validator = Validator::make(
				array(
					'current_password' => $_POST['pass1'],
					'new_password' => $_POST['pass2'],
	    			'new_password_confirmation' => $_POST['pass3'],
				), 
				array(
					'new_password' => 'required|between:4,30|confirmed',
					'current_password' => strlen($user->password) ? 'required' : ''
				)
			);

			if ($validator->passes()) {
				if (!strlen($user->password) || (strlen($user->password) && Hash::check($_POST['pass1'], $user->password))) {
					$user->password = Hash::make($_POST['pass2']);
					
					if ($user->save()) {
						redirect_to('?p=password', array('updated' => true));
					} else {
						$errors = new MessageBag(array('error' => trans('errors.dbsave')));
					}
				} else {
					$errors = new MessageBag(array('error' => trans('errors.current_password')));
				}
			} else {
				$errors = $validator->errors();
			}
		}
	break;

	case 'profile':
		$user = Auth::user()->id;

		if (isset($_POST['submit']) && csrf_filter()) {
			$data = array('avatar_type' => $_POST['avatar_type']);

			$types = implode(',', array_keys(Config::get('auth.providers', array())));

			$rules = array('avatar_type' => "in:image,gravatar,$types");

		    foreach (UserFields::all('user') as $key => $field) {
		    	if (!empty($field['validation'])) {
		    		$data[$key] = @$_POST[$key];
		    		$rules[$key] = $field['validation'];
		    	}
		    }

		    $validator = Validator::make($data, $rules);

			if ($validator->passes()) {
				
				$displayName = escape(@$_POST['display_name']);
				if (!empty($displayName)) {
					$user->display_name = $displayName;
				}

				if ($user->save()) {
					$fields = array_merge(UserFields::all('user'), array('avatar_type' => ''));

					foreach ($fields as $key => $field) {
						Usermeta::update($user->id, $key, escape(@$_POST[$key]), @$user->usermeta[$key]);
					}

					redirect_to('?p=profile', array('updated' => true));
				} else {
					$errors = new MessageBag(array('error' => trans('errors.dbsave')));
				}
			}  else {
				$errors = $validator->errors();
			}
		}
	break;
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
<div class="row">
	<div class="col-md-2">
		<ul class="nav nav-pills nav-stacked">
			<li <?php echo $page == 'account' ? 'class="active"':'' ?>><a href="?p=account"><?php echo _e('main.account') ?></a></li>
			<li <?php echo $page == 'profile' ? 'class="active"':'' ?>><a href="?p=profile"><?php echo _e('main.profile') ?></a></li>
			<li <?php echo $page == 'password' ? 'class="active"':'' ?>><a href="?p=password"><?php echo _e('main.password') ?></a></li>
			<li <?php echo $page == 'connect' ? 'class="active"':'' ?>><a href="?p=connect"><?php echo _e('main.connect') ?></a></li>
		</ul>
	</div>
	<div class="col-md-6">
<?php
switch ($page) {

	// Account
	case 'account':
		?>
		<h3 class="page-header"><?php echo _e('main.account') ?></h3>

		<?php if (isset($errors)) {
			echo '<div class="alert alert-danger">';
			foreach ($errors->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</div>';
		} ?>
		
		<?php if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php _e('main.changes_saved') ?>
			</div>
		<?php endif ?>

		<form action="" method="POST">
			<?php csrf_input() ?>
			
			<?php if (Config::get('auth.require_username') && Config::get('auth.username_change')): ?>
				<div class="form-group">
			        <label for="username"><?php _e('main.username') ?> <em><?php _e('main.required') ?></em></label>
			        <input type="text" name="username" id="username" value="<?php echo $user->username ?>" class="form-control">
			    </div>
			<?php endif ?>

			<div class="form-group">
		        <label for="email"><?php _e('main.email') ?> <em><?php _e('main.required') ?></em></label>
		        <input type="text" name="email" id="email" value="<?php echo $user->email ?>" class="form-control">
		    </div>

		    <div class="form-group">
		        <label for="locale"><?php _e('main.language') ?></label>
		        <select name="locale" id="locale" class="form-control">
		        <?php $locales = Config::get('app.locales'); ?>
	        	<?php foreach ($locales as $key => $lang) : ?>
					<option value="<?php echo $key ?>" <?php echo $user->locale == $key ? 'selected' : '' ?>><?php echo $lang ?></option>
				<?php endforeach ?>
				</select>
		    </div>

            <div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    	<?php if (Config::get('auth.delete_account')): ?>
					<div class="pull-right v-middle"><a href="?p=delete"><?php _e('main.delete_my_account') ?></a></div>
				<?php endif ?>
		    </div>
		</form>
		<?php
	break;

	// Password
	case 'password':
		?>
		<h3 class="page-header"><?php echo _e('main.password') ?></h3>

		<?php if (isset($errors)) {
			echo $errors->first(null, '<div class="alert alert-danger alert-dismissible"><span class="close" data-dismiss="alert">&times;</span> :message</div>');
		} ?>

		<?php if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php _e('main.pass_changed') ?>
			</div>
		<?php endif ?>
		
		<form action="" method="POST">
			<?php csrf_input() ?>

			<div class="form-group">
		        <label for="pass1"><?php _e('main.current_password') ?></label>
		        <input type="password" name="pass1" id="pass1" class="form-control" autocomplete="off" value="">
		    </div>
			<div class="form-group">
		        <label for="pass2"><?php _e('main.newpassword') ?></label>
		        <input type="password" name="pass2" id="pass2" class="form-control" autocomplete="off" value="">
		    </div>
		    <div class="form-group">
		        <label for="pass3"><?php _e('main.newpassword_confirmation') ?></label>
		        <input type="password" name="pass3" id="pass3" class="form-control" autocomplete="off" value="">
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
		<?php
	break;


	// Profile
	case 'profile':
		?>
		<link href="<?php echo asset_url('css/vendor/imgpicker.css') ?>" rel="stylesheet">

		<h3 class="page-header"><?php echo _e('main.profile') ?></h3>

		<?php if (isset($errors)) {
			echo '<div class="alert alert-danger">';
			foreach ($errors->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</div>';
		} ?>
		
		<?php if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php _e('main.changes_saved') ?>
			</div>
		<?php endif ?>

		<form action="?p=profile" method="POST">
			<?php csrf_input() ?>
			
			<div class="avatar-container form-group">
				<label><?php _e('main.avatar') ?></label>

				<div class="clearfix">
					<div class="pull-left">
						<a href="<?php echo $user->avatar ?>" target="_blank"><img src="<?php echo $user->avatar ?>" class="avatar-image img-thumbnail" width="150"></a>
					</div>
					<div class="pull-left" style="margin-left: 10px;">
						<?php $avatarType = @$user->usermeta['avatar_type']; ?>
						<select name="avatar_type" class="form-control">
							<option value="" <?php echo $avatarType == '' ? 'selected' : '' ?>><?php _e('main.default') ?></option>
							<option value="image" <?php echo $avatarType == 'image' ? 'selected' : '' ?>><?php _e('main.uploaded') ?></option>
							<option value="gravatar" <?php echo $avatarType == 'gravatar' ? 'selected' : '' ?>>Gravatar</option>

							<?php foreach (Config::get('auth.providers', array()) as $key => $provider) {
								if (!empty($user->usermeta["{$key}_id"])) {
									echo '<option value="'.$key.'" '.($avatarType == $key ? 'selected' : '').'>'.$provider.'</option>';
								}
							} ?>
						</select>
						<div class="btn btn-info btn-sm ip-upload"><?php _e('main.upload') ?> <input type="file" name="file" class="ip-file"></div>
						<button type="button" class="btn btn-info btn-sm ip-webcam"><?php _e('main.webcam') ?></button>
					</div>
				</div>

				<div class="alert ip-alert"></div>
				<div class="ip-info"><?php _e('main.crop_info') ?></div>
				<div class="ip-preview"></div>
				<div class="ip-rotate">
					<button type="button" class="btn btn-default ip-rotate-ccw" title="Rotate counter-clockwise"><span class="icon-ccw"></span></button>
					<button type="button" class="btn btn-default ip-rotate-cw" title="Rotate clockwise"><span class="icon-cw"></span></button>
				</div>
				<div class="ip-progress">
					<div class="text"><?php _e('main.uploading') ?></div>
					<div class="progress progress-striped active"><div class="progress-bar"></div></div>
				</div>
				<div class="ip-actions">
					<button type="button" class="btn btn-sm btn-success ip-save"><?php _e('main.save_image') ?></button>
					<button type="button" class="btn btn-sm btn-primary ip-capture"><?php _e('main.capture') ?></button>
					<button type="button" class="btn btn-sm btn-default ip-cancel"><?php _e('main.cancel') ?></button>
				</div>
			</div>

			<?php if (UserFields::has('first_name') && UserFields::has('last_name')): ?>
				<div class="form-group">
			        <label for="display_name"><?php _e('main.display_name') ?></label>
			        <select name="display_name" id="display_name" class="form-control">
			        	<?php if (Config::get('auth.require_username')): ?>
							<option <?php echo $user->display_name == $user->username ? 'selected' : '' ?>><?php echo $user->username ?></option>
						<?php endif ?>

			        	<?php if (!empty($user->first_name)): ?>
			        		<option <?php echo $user->display_name == $user->first_name ? 'selected' : '' ?>><?php echo $user->first_name ?></option>
			        	<?php endif ?>
			        	
			        	<?php if (!empty($user->last_name)): ?>
			        		<option <?php echo $user->display_name == $user->last_name ? 'selected' : '' ?>><?php echo $user->last_name ?></option>
			        	<?php endif ?>
			        	
			        	<?php if (!empty($user->first_name) && !empty($user->last_name)): ?>
			        		<option <?php echo $user->display_name == "$user->first_name $user->last_name" ? 'selected' : '' ?>><?php echo "$user->first_name $user->last_name" ?></option>
			        		<option <?php echo $user->display_name == "$user->last_name $user->first_name" ? 'selected' : '' ?>><?php echo "$user->last_name $user->first_name" ?></option>
			        	<?php endif ?>
			        </select>
			    </div>
			<?php endif ?>

		    <?php echo UserFields::setData($user->usermeta)->build('user') ?>

            <div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>

		<script src="<?php echo asset_url('js/vendor/jquery.Jcrop.min.js') ?>"></script>
		<script src="<?php echo asset_url('js/vendor/jquery.imgpicker.js') ?>"></script>
		<script> 
			$(function() {
				$('.avatar-container').imgPicker({
					url: '<?php echo App::url("ajax.php?action=avatar") ?>',
					messages: <?php echo json_encode(trans('imgpicker.js')) ?>,
					aspectRatio: 1,
					cropSuccess: function(img) {
						$('.avatar-image').attr('src', img.url + '?'+new Date().getTime());
						this.container.find('select').val('image');
					}
				});

				EasyLogin.generateDisplayName();
			}); 
		</script>
		<?php
	break;

	// Connect
	case 'connect':
		?> 
		<div class="row">
			<div class="col-md-6 social-icons">
				<?php foreach (Config::get('auth.providers', array()) as $key => $provider) {
					?>
					<ul class="list-group">
						<li class="list-group-item clearfix">
							<span class="icon-<?php echo $key ?>"></span> <?php echo $provider ?>
							<?php if (empty(Auth::user()->usermeta["{$key}_id"])): ?>
								<a href="oauth.php?provider=<?php echo $key ?>" class="btn btn-info btn-sm pull-right"><?php _e('main.connect') ?></a>
							<?php else: ?>
								<a href="oauth.php?provider=<?php echo $key ?>&disconnect=1" class="btn btn-danger btn-sm pull-right"><?php _e('main.disconnect') ?></a>
							<?php endif ?>
						</li>
					</ul>
					<?php
				} ?>
			</div>
		</div>
		<p>
			<span class="label label-warning"><?php _e('main.warning') ?></span>
			<?php _e('main.connect_warning', array('password' => '<a href="?p=password">'.trans('main.password').'</a>')) ?>
		</p>
		<?php
	break;
	
	// Delete account
	case 'delete':
		if (!Config::get('auth.delete_account')) {
			redirect_to('?p=account');
		}

		if (isset($_POST['submit']) && csrf_filter()) {
			$id = Auth::user()->id;

			User::where('id', $id)->limit(1)->delete();
			
			Usermeta::delete($id);

			Message::newQuery()->where('to_user', $id)
							   ->orWhere('from_user', $id)
							   ->delete();
			
			Contact::deleteAll($id);

			Comments::deleteUserComments($id);
								
			redirect_to(App::url());
		}
		?>
		<h3 class="page-header"><?php echo _e('main.delete_account') ?></h3>
		<?php _e('main.delete_account_message') ?>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-danger"><?php _e('main.delete_my_account_confirm') ?></button>
		    </div>
		</form>
		<?php
	break;

	default:
		redirect_to('?p=account');
	break;
}
?>
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