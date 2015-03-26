<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());

$page = isset($_GET['p']) ? $_GET['p'] : 'step';



$user = User::find(Auth::user()->id);
$payperclick = Usermeta::get(Auth::user()->id, 'payperclick', true);
if ($payperclick==""){
    redirect_to('ppcsetup.php');
 }
     if (isset($_POST['submit']) && csrf_filter()) {
			if (isset($_POST['payperclick'])) {
                $payperclick1 = $_POST['payperclick'];
				Usermeta::update(Auth::user()->id, 'payperclick', $payperclick);
                redirect_to('ppcexpress.php');
			} else {
				Usermeta::update(Auth::user()->id, 'payperclick', 0);
                redirect_to('?p=cancelled');
			}
			
			
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
<?php if ($page=='cancelled'){ ?>
    <h1>Your Pay Per Click Subscription has Been Cancelled, you may re enroll below.</h1><?php }  ?>
    <?php if ($payperclick==3){ ?>
    <h1>You are not using Our Pay Per Click Service. To change See Below:</h1><?php }  ?>
        <div class="col-md-6">
           <h3 class="page-header">Pay Per Click Options:</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
            <?php function seelandingpage($value, $payperclick){
         if ($value==$payperclick){
             return 'checked';
         }
     }
            ?>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':seelandingpage(1,$payperclick); ?>>Check If You want Us Todo Your PPC Custom
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="2" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':seelandingpage(2,$payperclick); ?>>Check If You want To Use Express Quick Setup
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="3" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':seelandingpage(3,$payperclick); ?>>Check If You you dont want to use any service.
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
	</div>
</body>
</html>