<?php
require_once 'app/init.php';
require_once 'db.php';
use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());
//new client wizard and client edit wizard must be differnt pages
$page = isset($_GET['p']) ? $_GET['p'] : 'step1';



switch ($page) {

	case 'step1':
    $user = User::find(Auth::user()->id);
    
    $getmodels = mysql_query("SELECT * FROM models");
    $numrows = mysql_num_rows($getmodels);

    
          function getmodelvalue($val, $modelmetakey){
			$modelmetakeyfinal = Usermodels::get(Auth::user()->id, "$modelmetakey", true);
         if ($val==$modelmetakeyfinal){
             return 'checked';
         }
                  else {
                      return 'checked';
                  }
     }


    
    
     if (isset($_POST['submit']) && csrf_filter()) {
         
         if (isset($_POST['automation'])) {
                $automation = $_POST['automation'];
				Usermodels::update(Auth::user()->id, 'automation', 1);
			} 
         if (isset($_POST['autoreports'])) {
                $autoreports = $_POST['autoreports'];
				Usermodels::update(Auth::user()->id, 'autoreports', 1);
			} 
         if (isset($_POST['invoice'])) {
                $invoice = $_POST['invoice'];
				Usermodels::update(Auth::user()->id, 'invoice', 1);
			} 
         if (isset($_POST['leads'])) {
                $leads = $_POST['leads'];
				Usermodels::update(Auth::user()->id, 'leads', 1);
			} 
         if (isset($_POST['autoreports'])) {
                $autoreports = $_POST['autoreports'];
				Usermodels::update(Auth::user()->id, 'autoreports', 1);
			} 
         if (isset($_POST['automation_email'])) {
                $automation_email = $_POST['automation_email'];
				Usermodels::update(Auth::user()->id, 'automation_email', 1);
			} 
         if (isset($_POST['automation_sms'])) {
                $automation_sms = $_POST['automation_sms'];
				Usermodels::update(Auth::user()->id, 'automation_sms', 1);
			} 
         if (isset($_POST['automation_call'])) {
                $automation_call = $_POST['automation_call'];
				Usermodels::update(Auth::user()->id, 'automation_call', 1);
			} 
         if (isset($_POST['payment'])) {
                $payment = $_POST['payment'];
				Usermodels::update(Auth::user()->id, 'payment', 1);
			} 
         if (isset($_POST['seo'])) {
                $seo = $_POST['seo'];
				Usermodels::update(Auth::user()->id, 'seo', 1);
			} 
         if (isset($_POST['ppc'])) {
                $ppc = $_POST['ppc'];
				Usermodels::update(Auth::user()->id, 'ppc', 1);
			} 
         if (isset($_POST['analytics'])) {
                $analytics = $_POST['analytics'];
				Usermodels::update(Auth::user()->id, 'analytics', 1);
			} 
         if (isset($_POST['bigclient'])) {
                $bigclient = $_POST['bigclient'];
				Usermodels::update(Auth::user()->id, 'bigclient', 1);
			} 
         if (isset($_POST['addstores'])) {
                $addstores = $_POST['addstores'];
				Usermodels::update(Auth::user()->id, 'addstores', 1);
			} 
         if (isset($_POST['newsletter'])) {
                $newsletter = $_POST['newsletter'];
				Usermodels::update(Auth::user()->id, 'newsletter', 1);
			} 
         if (isset($_POST['shortcode'])) {
                $shortcode = $_POST['shortcode'];
				Usermodels::update(Auth::user()->id, 'shortcode', 1);
			} 
         if (isset($_POST['websitechatbox'])) {
                $websitechatbox = $_POST['websitechatbox'];
				Usermodels::update(Auth::user()->id, 'websitechatbox', 1);
			} 
          if (isset($_POST['newclientwizard'])) {
                $newclientwizard = $_POST['newclientwizard'];
				Usermodels::update(Auth::user()->id, 'newclientwizard', 1);
			} 
			
			redirect_to('?p=step2');
		}
		

	break;
    
    	case 'step2':
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

			redirect_to('?p=step3');
		}

	break;
    
    case 'step3':
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

			redirect_to('?p=step4');
		}


	break;
    
    case 'step4':
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
			redirect_to('?p=step5');
		}
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
<?php
switch ($page) {

	case 'step1':
		?>
            <?php function seelandingpage($value){
         if ($value==1){
             return 'checked';
         }
     }
            ?>
		<h3 class="page-header">Step 1</h3>
		//Going To Need Some Javascript to change value to fit the landing page they pick
		<h4><?php _e('main.settings') ?></h4>
         <p>Add slider picker See here: http://www.jqueryrain.com/?ALE9mfyN
      </p>
		<form action="" method="POST">
			<?php csrf_input();
    ?>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="automation" >Automation
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="autoreports" <?php echo empty(Auth::user()->usermodels['autoreports'])?'':'checked'; ?>>Auto Reports
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="invoice" >Invoice
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="leads">Leads
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox"value="1" name="automation_email" <?php echo empty(Auth::user()->usermodels['automation_email'])?'':'checked'; ?>>Automation Email
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="automation_sms" <?php echo empty(Auth::user()->usermodels['automation_sms'])?'':'checked'; ?>>Automation SMS
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="automation_call" <?php echo empty(Auth::user()->usermodels['automation_call'])?'':'checked'; ?>>Automation Call
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="payment" <?php echo empty(Auth::user()->usermodels['payment'])?'':'checked'; ?>>Payment
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="seo" <?php echo empty(Auth::user()->usermodels['seo'])?'':'checked'; ?>>SEO
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="ppc" <?php echo empty(Auth::user()->usermodels['ppc'])?'':'checked'; ?>>PPC
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="analytics" <?php echo empty(Auth::user()->usermodels['analytics'])?'':'checked'; ?>>Analytics
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="bigclient" <?php echo empty(Auth::user()->usermodels['bigclient'])?'':'checked'; ?>>Big Client
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="addstores" <?php echo empty(Auth::user()->usermodels['addstores'])?'':'checked'; ?>>Add Stores Wizard
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="newsletter" <?php echo empty(Auth::user()->usermodels['newsletter'])?'':'checked'; ?>>Newsletter
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="shortcode" <?php echo empty(Auth::user()->usermodels['shortcode'])?'':'checked'; ?>>Shortcode SMS
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="websitechatbox" <?php echo empty(Auth::user()->usermodels['websitechatbox'])?'':'checked'; ?>>Website Chat Box
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="newclientwizard" <?php echo empty(Auth::user()->usermodels['newclientwizard'])?'':'checked'; ?>>New Client Wizard
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
    
    
   case 'step3':
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
    
    case 'step4':
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