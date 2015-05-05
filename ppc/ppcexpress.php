<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());

$page = isset($_GET['p']) ? $_GET['p'] : 'step1';
$payperclick = Usermeta::get(Auth::user()->id, 'payperclick', true);
 if ($payperclick==1){
    redirect_to('ppccustom.php');
}
 if ($payperclick==3){
    redirect_to('ppcchange.php');e;
}
if ($payperclick==0){
    redirect_to('ppcchange.php');
 }
if ($payperclick==""){
    redirect_to('ppcsetup.php');
 }

switch ($page) {

	case 'step1':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['ad_loc_zip'])) {
                $ad_loc_zip = $_POST['ad_loc_zip'];
				Usermeta::update(Auth::user()->id, 'ad_loc_zip', $ad_loc_zip);
			} 
            if (isset($_POST['ad_loc_city'])) {
                $ad_loc_city = $_POST['ad_loc_city'];
				Usermeta::update(Auth::user()->id, 'ad_loc_city', $ad_loc_city);
			} 
            if (isset($_POST['ad_loc_state'])) {
                $ad_loc_state = $_POST['ad_loc_state'];
				Usermeta::update(Auth::user()->id, 'ad_loc_state', $ad_loc_state);
			} 
            if (isset($_POST['ad_loc_radius'])) {
                $ad_loc_radius = $_POST['ad_loc_radius'];
				Usermeta::update(Auth::user()->id, 'ad_loc_radius', $ad_loc_radius);
			} 
            if (isset($_POST['ad_keyword'])) {
                $ad_keyword = $_POST['ad_keyword'];
				Usermeta::update(Auth::user()->id, 'ad_keyword', $ad_keyword);
			} 

			redirect_to('?p=step2');
		}

	break;
    
    	case 'step2':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['ad_headline'])) {
                $ad_headline = $_POST['ad_headline'];
				Usermeta::update(Auth::user()->id, 'ad_headline', $ad_headline);
			} 
            if (isset($_POST['ad_text1'])) {
                $ad_text1 = $_POST['ad_text1'];
				Usermeta::update(Auth::user()->id, 'ad_text1', $ad_text1);
			} 
            if (isset($_POST['ad_text2'])) {
                $ad_text2 = $_POST['ad_text2'];
				Usermeta::update(Auth::user()->id, 'ad_text2', $ad_text2);
			} 
            if (isset($_POST['ad_phone'])) {
                $ad_phone = $_POST['ad_phone'];
				Usermeta::update(Auth::user()->id, 'ad_phone', $ad_phone);
			} 
			redirect_to('?p=step3');
		}
	break;
    
    case 'step3':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['ad_day_budget'])) {
                $ad_day_budget = $_POST['ad_day_budget'];
				Usermeta::update(Auth::user()->id, 'ad_day_budget', $ad_day_budget);
			}  
			redirect_to('?p=step3');
		}

	break;
    
    case 'step4':
    $user = User::find(Auth::user()->id);
		

	break;
    
    case 'step5':
    $user = User::find(Auth::user()->id);

	break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settings</title>
	
	<script src="<?php echo asset_url('js/vendor/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo asset_url('js/easylogin.js') ?>"></script>
</head>
<body>

<div class="row">
	<div class="col-md-2">
		<ul class="nav nav-pills nav-stacked">
			<li <?php echo $page == 'Step 1: Business Details' ? 'class="active"':'' ?>><a href="?p=step1"><?php echo _e('main.step1') ?></a></li>
			<li <?php echo $page == 'Step 2: Business Location' ? 'class="active"':'' ?>><a href="?p=step2"><?php echo _e('main.profile') ?></a></li>
			<li <?php echo $page == 'Step 3: Contact Info & Lead Alerts' ? 'class="active"':'' ?>><a href="?p=step3"><?php echo _e('main.password') ?></a></li>
			<li <?php echo $page == 'Step 4: Payment Info' ? 'class="active"':'' ?>><a href="?p=step4"><?php echo _e('main.step4') ?></a></li>
		</ul>
	</div>
	<div class="col-md-6">
        <h1>We Handle All The Split Testing and Landing Page Design</h1>
<?php
switch ($page) {

	case 'step1':
		?>
		<h3 class="page-header">Setting up ads: step1</h3>
		//Going To Need Some Javascript to change value to fit the landing page they pick
		<h4>Ad Targeting</h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_loc_zip', true)?>" name="ad_loc_zip" <?php echo empty(Auth::user()->usermeta['ad_loc_zip'])?'':'checked'; ?>>Enter Location Zip
				</label>
			</div>
           <div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_loc_city', true)?>" name="ad_loc_city" <?php echo empty(Auth::user()->usermeta['ad_loc_city'])?'':'checked'; ?>>Enter Location City
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_loc_state', true)?>" name="ad_loc_state" <?php echo empty(Auth::user()->usermeta['ad_loc_state'])?'':'checked'; ?>>Enter Ad Target State
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_keyword', true)?>" name="ad_keyword" <?php echo empty(Auth::user()->usermeta['ad_keyword'])?'':'checked'; ?>>Enter Your Product or Service
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
		<?php
	break;
    
   case 'step2':
		?>
		<h3 class="page-header">Seting up ads: step2</h3>
		//Logo upload or dropbox api, and color scheme, add swatch picker
        //main color, side color, color not to use
		<h4>Creat Your Ad:</h4>
        <p>Add image uploader, and swatch picker. See here: http://www.jqueryrain.com/demo/jquery-color-picker/</p>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_headline', true)?>" name="ad_headline" <?php echo empty(Auth::user()->usermeta['ad_headline'])?'':'checked'; ?>>Ad headline 25 Limit
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_text1', true)?>" name="ad_text1" <?php echo empty(Auth::user()->usermeta['ad_text1'])?'':'checked'; ?>>Ad Text Line 1
				</label>
			</div>
            <div class="text">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'ad_text2', true)?>" name="ad_text2" <?php echo empty(Auth::user()->usermeta['ad_text2'])?'':'checked'; ?>>Ad Text Line 2
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_phone', true)?>" name="ad_phone" <?php echo empty(Auth::user()->usermeta['ad_phone'])?'':'checked'; ?>>Ad Phone
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
		<?php
	break;
    
    case 'step3':
		?>
		<h3 class="page-header">Step 3 HOMIE</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="text" value="<?php echo Usermeta::get($user->id, 'ad_phone', true)?>" name="ad_phone" <?php echo empty(Auth::user()->usermeta['ad_phone'])?'':'checked'; ?>>Ad Phone Number
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
		<?php
	break;

    case 'step4':
		?>
		<h3 class="page-header">All Finished!</h3>
		
		<h4>Clicks Estimated Per Month: INSERT EST. VALUE</h4>

		<?php
	break;
    
        case 'step5':
		?>
		<h2 class="page-header">We will update your account when we are finished with 3 Prototypes, then we will give you the links to view them and any changes needed will be done, Thanks. 
            </h2>
		
		<?php
	break;

}
?>
</body>
</html>