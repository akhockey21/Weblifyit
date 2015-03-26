<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$page = isset($_GET['p']) ? $_GET['p'] : 'start';

switch ($page) {
    case 'start':
		$user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
			
		}
	break;
    case 'step1':
		$user = User::find(Auth::user()->id);

		if (isset($_POST['submit']) && csrf_filter()) {
			
		}
	break;
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
        <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li class="active">
                <a href="javascript:void(0)"><i class="fa fa-home"></i> Design</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-pencil"></i> Content</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
            </li>
        </ul>
    </div>
<div class="row">
	<div class="col-md-2">
        <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Website Settings:</h2>
                </div>
		<ul class="nav nav-pills nav-stacked">
			<li <?php echo $page == 'step1' ? 'class="active"':'' ?>><a href="?p=step1">Logo & Colors</a></li>
			<li <?php echo $page == 'step2' ? 'class="active"':'' ?>><a href="?p=step2">Business Information</a></li>
			<li <?php echo $page == 'step3' ? 'class="active"':'' ?>><a href="?p=step3">Choose Template</a></li>
			<li <?php echo $page == 'preview' ? 'class="active"':'' ?>><a href="?p=preview">Preview Website</a></li>
            <div class="form-group form-actions">
<a class="btn btn-sm btn-warning" href="web-preview.php" target="_blank"><i class="fa fa-repeat"></i> Preview</a>
<a class="btn btn-sm btn-primary" href="web-publish.php" target="_blank"><i class="fa fa-check"></i> Publish</a>
</div>
		</ul>
	</div>
    </div>
	<div class="col-md-10"> 
<?php
switch ($page) {

	// Account
	case 'start':
		?>
		<h3 class="page-header">Save Website</h3>

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
	case 'step1':
		?>
                <!-- END Example Form Title -->
        <div class="block">
        <div class="block-title">
                    <h2>Logo & Colors</h2>
                </div>
                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="city" name="logo" class="form-control" placeholder="logo">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                            <div class="input-group">
                            <input type="text" id="state" name="state" class="form-control" placeholder="State">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Store Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Store Phone Number">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="addstore">Add Store</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            
		<?php
	break;

	default:
		redirect_to('?p=start');
	break;
}
?>
</div>
    </div></div>
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