<?php
require_once 'app/init.php';

use Hazzard\Support\MessageBag;

if (!Auth::check()) redirect_to(App::url());
$landing_page = Usermeta::get(Auth::user()->id, 'landing_page', true);
$leadtest = Userleads::get(Auth::user()->id, 'userlead', true);
$p_good = Usermeta::get(Auth::user()->id, 'payment_good', true);
$p_balance = Usermeta::get(Auth::user()->id, 'payment_balance', true);
$autoreports = Usermodels::get(Auth::user()->id, 'autoreports', true);
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
    
    <?php
    if ($autoreports==1){
            $html_landing_page = "<h1>Auto Reports</h1>
        <sub>Locked</sub>";
            echo $html_landing_page;
        }
?>
<div class="row">
	<div class="col-md-4">
        <?php $landing_page = Usermeta::get(Auth::user()->id, 'landing_page', true); 
        if ($landing_page==0){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Locked</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==1){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - Custom By Us!</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==2){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - You're Using unbounce Todo it yourself!</sub>";
            echo $html_landing_page;
        }
        if ($landing_page==3){
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Unlocked - Although you cant see reports!</sub>";
            echo $html_landing_page;
        }
        else{
            $html_landing_page = "<h1>Landing Page</h1>
        <sub>Locked</sub>";
            echo $html_landing_page;
        }
        ?>
	</div>
    <?php Usermodels::update(Auth::user()->id, 'autoreports', 1); ?>
    <div class="col-md-4">
		<h1>Pay Per Click</h1>
        <sub>Locked</sub>
	</div>
    <div class="col-md-4">
		<h1>Search Engine Optimization</h1>
        <sub>Locked</sub>
	</div>
    <div class="col-md-4">
		<h1>Email Newsletter</h1>
        <sub>Locked</sub>
	</div>
</div>
<?php if ($leadtest==true){
            
     $row = explode(";", $leadtest);
    ?>
<div class="row">
    <div class="col-md-8">
        <table style="width:100%">
  <tr>
    <td>Date</td>
    <td>Name</td>
    <td>Phone</td> 
    <td>Email</td>
  </tr>
            
         <?php foreach ($row as $rowleads){
            echo '<tr>';
            $pieces = explode(",", $rowleads);
        
                foreach ($pieces as $piece){
                    echo '<td>';
                    echo $piece;
                    echo '</td>';
                } 
            echo '</tr>';
            } ?>
            
</table>
    </div>
    <div class="col-md-4">
        <h2>Leads Today</h2>
        <?php 
             $day = 0;
            $month = 0;
            $week = 0;
            foreach ($row as $rowdates){
                
                 //$current = strtotime(date("Y-m-d"));
                $date = substr($rowdates, 0, 10);

 $my_date = date('Y-m-d', strtotime($date));
                //echo $my_date;
                $current = date('Y-m-d');
               
                if($my_date==$current){
                $day++;
                
                }
                if(strtotime($my_date) > strtotime('1 month ago')){
                   $month++; 
                }
                if(strtotime($my_date) > strtotime('1 week ago')){
                   $week++; 
                }
                
            
            
            }
            echo $day;
           
            //echo $leadstoday;
        ?>
        <br>
        <h2>Leads This Week</h2>
<?php echo $week; ?>
        <br>
        <h2>Leads This Month</h2>
            <?php echo $month; ?>
        <br>
        <h2>Total Leads:<?php echo substr_count($leadtest, ';') + 1; ?></h2>
    </div>
</div>
    <?php
        }
    ?>
    
</body>
</html>