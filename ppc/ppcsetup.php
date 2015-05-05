<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());

$page = isset($_GET['p']) ? $_GET['p'] : 'step';



$user = User::find(Auth::user()->id);
$payperclick = Usermeta::get(Auth::user()->id, 'payperclick', true);
 if ($payperclick==0){
     if (isset($_POST['submit']) && csrf_filter()) {
			if (isset($_POST['payperclick'])) {
                $payperclick1 = $_POST['payperclick'];
				Usermeta::update(Auth::user()->id, 'payperclick', $payperclick1);
                redirect_to('?p=reload');
			} else {
				Usermeta::update(Auth::user()->id, 'payperclick', 0);
                redirect_to('?p=didntpick');
			}
			
			
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
<?php if ($page=='didntpick'){ ?>
    <h1>You Must Pick One, If You Do not know which one you want, for now pick the free one.</h1><?php }  ?>
        <div class="col-md-6">
        <?php if ($payperclick==0){ ?>
           <h3 class="page-header">Landing Page Options:</h3>
		
		<h4><?php _e('main.settings') ?></h4>
		<form action="" method="POST">
			<?php csrf_input() ?>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':'checked'; ?>>Check If You want Us Todo Your Full Pay Per Click Campaign, Price Per Store $$ Montlhy
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="2" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':'checked'; ?>>Check If You want Todo Use Our Express Local Setup! Price Per Store Monthly $$
				</label>
			</div>
            <div class="checkbox">
				<label>
					<input type="checkbox" value="3" name="payperclick" <?php echo empty(Auth::user()->usermeta['payperclick'])?'':'checked'; ?>>Check If You Dont Want Us todo Any Advertising, Only Remarketing!
				</label>
			</div>
			<div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php _e('main.save_changes') ?></button>
		    </div>
		</form>
       <?php }
        if ($payperclick==1){
            redirect_to('ppccustom.php');
        }
        if ($payperclick==2){
            redirect_to('ppcexpress.php');e;
        }
        if ($payperclick==3){
           redirect_to('ppcno.php');
        }
        ?>
	</div>
</body>
</html>