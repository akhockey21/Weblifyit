<?php
use Hazzard\Support\MessageBag;

//$stores = Usermeta::get($user->id, 'number_of_stores', true);
$user = Auth::user()->id;

		if (isset($_POST['submit']) && csrf_filter()) {
            //$getstores = Usermeta::get($user->id, 'number_of_stores', true);
            //$updatestores = $getstores++;
            //Usermeta::update($user->id, 'number_of_stores', 2);
            //NEED TO ADD SANITIZE LATER
            /*if (isset($_POST["business_name.$updatestores"])) {
                $business_name = $_POST["business_name.$updatestores"];
				Usermeta::update(Auth::user()->id, "business_name.$updatestores", $business_name);
			}*/ 

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
		}

?>
///////////

<div class="row">
	<div class="col-md-2">
		<h2>Add a Store:</h2>
	</div>
    <?php 
        $getstores = Usermeta::get($user->id, 'number_of_stores', true);
        $newstore = $getstores++;
?>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="text" value="" name="<?php echo "business_name.$newstore"?>">Business Name
				</label>
			</div>
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
</div>