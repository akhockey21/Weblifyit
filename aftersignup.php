<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());

$page = isset($_GET['p']) ? $_GET['p'] : 'step1';

switch ($page) {

	case 'step1':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['type_of_business'])) {
                $type_of_business = $_POST['type_of_business'];
				Usermeta::update(Auth::user()->id, 'type_of_business', $type_of_business);
			} 
            if (isset($_POST['business_name'])) {
                $business_name = $_POST['business_name'];
				Usermeta::update(Auth::user()->id, 'business_name', $business_name);
			} 
            if (isset($_POST['first_name'])) {
                $first_name = $_POST['first_name'];
				Usermeta::update(Auth::user()->id, 'first_name', $first_name);
			} 
            if (isset($_POST['last_name'])) {
                $last_name = $_POST['last_name'];
				Usermeta::update(Auth::user()->id, 'last_name', $last_name);
			} 
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
				Usermeta::update(Auth::user()->id, 'phone', $phone);
			} 
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
				Usermeta::update(Auth::user()->id, 'email', $email);
			} 

			redirect_to('?p=step2');
		}

		if (isset($_GET['confirm'])) {
			Contact::confirm(Auth::user()->id, $_GET['confirm']);
			
			redirect_to('?p=step2');
		}

		if (isset($_GET['remove'])) {
			Contact::remove(Auth::user()->id, $_GET['remove']);
			
			redirect_to('?p=step2');
		}
	break;
    
    	case 'step2':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['location_target'])) {
                $location_target = $_POST['location_target'];
				Usermeta::update(Auth::user()->id, 'location_target', $location_target);
			} 
            if (isset($_POST['company_address_st'])) {
                $company_address_st = $_POST['company_address_st'];
				Usermeta::update(Auth::user()->id, 'company_address_st', $company_address_st);
			} 
            if (isset($_POST['company_address_city'])) {
                $company_address_city = $_POST['company_address_city'];
				Usermeta::update(Auth::user()->id, 'company_address_city', $company_address_city);
			} 
            if (isset($_POST['company_address_state'])) {
                $company_address_state = $_POST['company_address_state'];
				Usermeta::update(Auth::user()->id, 'company_address_state', $company_address_state);
			} 
            if (isset($_POST['company_address_zip'])) {
                $company_address_zip = $_POST['company_address_zip'];
				Usermeta::update(Auth::user()->id, 'company_address_zip', $company_address_zip);
			} 
            if (isset($_POST['company_years_in_business'])) {
                $company_years_in_business = $_POST['company_years_in_business'];
				Usermeta::update(Auth::user()->id, 'company_years_in_business', $company_years_in_business);
			} 

			redirect_to('?p=step3');
		}

		if (isset($_GET['confirm'])) {
			Contact::confirm(Auth::user()->id, $_GET['confirm']);
			
			redirect_to('?p=step3');
		}

		if (isset($_GET['remove'])) {
			Contact::remove(Auth::user()->id, $_GET['remove']);
			
			redirect_to('?p=step3');
		}
	break;
    
    case 'step3':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['company_owner_name'])) {
                $company_owner_name = $_POST['company_owner_name'];
				Usermeta::update(Auth::user()->id, 'company_owner_name', $company_owner_name);
			} 
            if (isset($_POST['company_busines_phone'])) {
                $company_busines_phone = $_POST['company_busines_phone'];
				Usermeta::update(Auth::user()->id, 'company_busines_phone', $company_busines_phone);
			} 
            if (isset($_POST['company_owner_cellphone'])) {
                $company_owner_cellphone = $_POST['company_owner_cellphone'];
				Usermeta::update(Auth::user()->id, 'company_owner_cellphone', $company_owner_cellphone);
			} 
            if (isset($_POST['company_fax'])) {
                $company_fax = $_POST['company_fax'];
				Usermeta::update(Auth::user()->id, 'company_fax', $company_fax);
			} 
            if (isset($_POST['company_email'])) {
                $company_email = $_POST['company_email'];
				Usermeta::update(Auth::user()->id, 'company_email', $company_email);
			} 
			redirect_to('?p=step3');
		}

		if (isset($_GET['confirm'])) {
			Contact::confirm(Auth::user()->id, $_GET['confirm']);
			
			redirect_to('?p=step3');
		}

		if (isset($_GET['remove'])) {
			Contact::remove(Auth::user()->id, $_GET['remove']);
			
			redirect_to('?p=step3');
		}
	break;
    
    case 'step4':
    $user = User::find(Auth::user()->id);
		
		if (isset($_POST['submit']) && csrf_filter()) {
            
            //NEED TO ADD SANITIZE LATER
			if (isset($_POST['name_on_cc'])) {
                $name_on_cc = $_POST['name_on_cc'];
				Usermeta::update(Auth::user()->id, 'name_on_cc', $name_on_cc);
			} 
            if (isset($_POST['cardholder_address_street'])) {
                $cardholder_address_street = $_POST['cardholder_address_street'];
				Usermeta::update(Auth::user()->id, 'cardholder_address_street', $cardholder_address_street);
			} 
            if (isset($_POST['cardholder_address_city'])) {
                $cardholder_address_city = $_POST['cardholder_address_city'];
				Usermeta::update(Auth::user()->id, 'cardholder_address_city', $cardholder_address_city);
			} 
            if (isset($_POST['cardholder_address_state'])) {
                $cardholder_address_state = $_POST['cardholder_address_state'];
				Usermeta::update(Auth::user()->id, 'cardholder_address_state', $cardholder_address_state);
			} 
            if (isset($_POST['cc_type'])) {
                $cc_type = $_POST['cc_type'];
				Usermeta::update(Auth::user()->id, 'cc_type', $cc_type);
			} 
            
            if (isset($_POST['cc_number'])) {
                $cc_number = $_POST['cc_number'];
				Usermeta::update(Auth::user()->id, 'cc_number', $cc_number);
			} 
            
            if (isset($_POST['cc_security_code'])) {
                $cc_security_code = $_POST['cc_security_code'];
				Usermeta::update(Auth::user()->id, 'cc_security_code', $cc_security_code);
			} 
            
            if (isset($_POST['cc_expiration_date'])) {
                $cc_expiration_date = $_POST['cc_expiration_date'];
				Usermeta::update(Auth::user()->id, 'cc_expiration_date', $cc_expiration_date);
			} 
			redirect_to('?p=step3');
		}

		if (isset($_GET['confirm'])) {
			Contact::confirm(Auth::user()->id, $_GET['confirm']);
			
			redirect_to('?p=step3');
		}

		if (isset($_GET['remove'])) {
			Contact::remove(Auth::user()->id, $_GET['remove']);
			
			redirect_to('?p=step3');
		}
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
<?php
switch ($page) {

	case 'step1':
		?>
		<h3 class="page-header">Step 1 HOMIE</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'type_of_business', true)?>" name="type_of_business" <?php echo empty(Auth::user()->usermeta['type_of_business'])?'':'checked'; ?>><?php echo _e('userfields.type_of_business') ?>
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'business_name', true)?>" name="business_name" <?php echo empty(Auth::user()->usermeta['business_name'])?'':'checked'; ?>><?php echo _e('userfields.business_name') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'first_name', true)?>" name="first_name" <?php echo empty(Auth::user()->usermeta['first_name'])?'':'checked'; ?>><?php echo _e('userfields.first_name') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'last_name', true)?>" name="last_name" <?php echo empty(Auth::user()->usermeta['last_name'])?'':'checked'; ?>><?php echo _e('userfields.last_name') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'phone', true)?>" name="phone" <?php echo empty(Auth::user()->usermeta['phone'])?'':'checked'; ?>><?php echo _e('userfields.phone') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'email', true)?>" name="email" <?php echo empty(Auth::user()->usermeta['email'])?'':'checked'; ?>><?php echo _e('userfields.email') ?>
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
		<h3 class="page-header">Step 2 HOMIE</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'location_target', true)?>" name="location_target" <?php echo empty(Auth::user()->usermeta['location_target'])?'':'checked'; ?>><?php echo _e('userfields.location_target') ?>
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_address_st', true)?>" name="company_address_st" <?php echo empty(Auth::user()->usermeta['company_address_st'])?'':'checked'; ?>><?php echo _e('userfields.company_address_st') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_address_city', true)?>" name="company_address_city" <?php echo empty(Auth::user()->usermeta['company_address_city'])?'':'checked'; ?>><?php echo _e('userfields.company_address_city') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_address_state', true)?>" name="company_address_state" <?php echo empty(Auth::user()->usermeta['company_address_state'])?'':'checked'; ?>><?php echo _e('userfields.company_address_state') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_address_zip', true)?>" name="company_address_zip" <?php echo empty(Auth::user()->usermeta['company_address_zip'])?'':'checked'; ?>><?php echo _e('userfields.company_address_zip') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_years_in_business', true)?>" name="company_years_in_business" <?php echo empty(Auth::user()->usermeta['company_years_in_business'])?'':'checked'; ?>><?php echo _e('userfields.company_years_in_business') ?>
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
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_owner_name', true)?>" name="company_owner_name" <?php echo empty(Auth::user()->usermeta['company_owner_name'])?'':'checked'; ?>><?php echo _e('userfields.company_owner_name') ?>
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_busines_phone', true)?>" name="company_busines_phone" <?php echo empty(Auth::user()->usermeta['company_busines_phone'])?'':'checked'; ?>><?php echo _e('userfields.company_busines_phone') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_owner_cellphone', true)?>" name="company_owner_cellphone" <?php echo empty(Auth::user()->usermeta['company_owner_cellphone'])?'':'checked'; ?>><?php echo _e('userfields.company_owner_cellphone') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_fax', true)?>" name="company_fax" <?php echo empty(Auth::user()->usermeta['company_fax'])?'':'checked'; ?>><?php echo _e('userfields.company_fax') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'company_email', true)?>" name="company_email" <?php echo empty(Auth::user()->usermeta['company_email'])?'':'checked'; ?>><?php echo _e('userfields.company_email') ?>
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
		<h3 class="page-header">Step 4 HOMIE</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'name_on_cc', true)?>" name="name_on_cc" <?php echo empty(Auth::user()->usermeta['name_on_cc'])?'':'checked'; ?>><?php echo _e('userfields.name_on_cc') ?>
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cardholder_address_street', true)?>" name="cardholder_address_street" <?php echo empty(Auth::user()->usermeta['cardholder_address_street'])?'':'checked'; ?>><?php echo _e('userfields.cardholder_address_street') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cardholder_address_city', true)?>" name="cardholder_address_city" <?php echo empty(Auth::user()->usermeta['cardholder_address_city'])?'':'checked'; ?>><?php echo _e('userfields.cardholder_address_city') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cardholder_address_state', true)?>" name="cardholder_address_state" <?php echo empty(Auth::user()->usermeta['cardholder_address_state'])?'':'checked'; ?>><?php echo _e('userfields.cardholder_address_state') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cc_type', true)?>" name="cc_type" <?php echo empty(Auth::user()->usermeta['cc_type'])?'':'checked'; ?>><?php echo _e('userfields.cc_type') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cc_number', true)?>" name="cc_number" <?php echo empty(Auth::user()->usermeta['cc_number'])?'':'checked'; ?>><?php echo _e('userfields.cc_number') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cc_security_code', true)?>" name="cc_security_code" <?php echo empty(Auth::user()->usermeta['cc_security_code'])?'':'checked'; ?>><?php echo _e('userfields.cc_security_code') ?>
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="type" value="<?php echo Usermeta::get($user->id, 'cc_expiration_date', true)?>" name="cc_expiration_date" <?php echo empty(Auth::user()->usermeta['cc_expiration_date'])?'':'checked'; ?>><?php echo _e('userfields.cc_expiration_date') ?>
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
		<?php
	break;

}
?>
</body>
</html>