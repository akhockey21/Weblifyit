<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
require_once 'models/automation/Services/Twilio.php';

$AccountSid = "ACbb3c4e8db938b277cadbb80bca1ddf87";
$AuthToken = "e79fb3595833bcc67c89e99b67299362";

$client = new Services_Twilio($AccountSid, $AuthToken);

if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['area'])) {
        $area = $_POST['area'];
        Usermeta::update(Auth::user()->id, 'twilio_areacode', $area);
        header( "Location: ?areacode=$area" );
    }
}

if (isset($_POST['areacodeupdate']) && csrf_filter()) {
    if (isset($_POST['areacodeup'])) {
        $area = $_POST['areacodeup'];
        Usermeta::update(Auth::user()->id, 'twilio_areacode', $area);
        header( "Location: ?areacode=$area" );
    }
    
}

if (isset($_POST['complete']) && csrf_filter()) {
    if (isset($_POST['buy-twilio'])) {
        $newnumber = $_POST['buy-twilio'];
        Usermeta::update(Auth::user()->id, 'twilio_number', $newnumber);
        Usermeta::update(Auth::user()->id, 'twilio_setup', 1);
    }
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
<?php
$twilio_setup = Usermeta::get(Auth::user()->id, 'twilio_setup', true);
$twilio_areacode = Usermeta::get(Auth::user()->id, 'twilio_areacode', true);
if($twilio_setup==1){
    $twilio_number = Usermeta::get(Auth::user()->id, 'twilio_number', true); ?>
    <div class="row text-center">
    <div class="col-md-6">
<a href="javascript:void(0)" class="widget widget-hover-effect1">
<div class="widget-simple themed-background">
<h4 class="widget-content widget-content-light">
Your Weblifyit Number Is
<strong><?php echo $twilio_number ?></strong>
</h4>
</div> 
</a>
</div>
</div>
    
<div class="row text-center">
<div class="col-md-12">
<div class="block full">
<div class="block-title">
<div class="block-options pull-right">
<div class="btn-group btn-group-md">
<a href="javascript:void(0)" class="btn btn-alt btn-md btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php 
if (isset($_GET['date'])) {
    $date = $_GET['date'];
        $tags = array("all_time", "this_month", "last_month", "today", "yesterday");
    $replacetags = array("All Time", "This Month", "Last Month", "Today", "Yesterday");
    echo "<strong>";
    echo str_replace($tags, $replacetags, $date);
    echo "</strong>";
} ?> <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-right">
<li>
<a href="?date=all_time">All Time</a>
</li>
<li>
<a href="?date=this_month">This Month</a>
</li>
<li>
<a href="?date=last_month">Last Month</a>
</li>
<li>
<a href="?date=today">Today</a>
</li>
<li>
<a href="?date=yesterday">Yesterday</a>
</li>
</ul>
</div>
</div>
<h2><strong>SMS & Call</strong> stats</h2>
</div>
<?php  
    if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $date = preg_replace('/\s+/', '', $date);
?>
    <div class="row text-center">
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>SMS</strong> Sent</h4> 
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "sms", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Calls</strong> Dialed</h4>
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Minutes</strong> of Calls</h4>
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->usage";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2 ">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Recieved</strong> Calls</h4>
</div>
<div class="widget-extra-full "><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls-inbound", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
    echo " - (";
    echo "$record->usage";
    echo ") Minutes";
}
    
    ?></span></div>
</a>
</div>
</div>
    <?php
    }else{
        $date = "all_time";
    ?>
<div class="row text-center">
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>SMS</strong> Sent</h4> 
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "sms", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Calls</strong> Dialed</h4>
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Minutes</strong> of Calls</h4>
</div>
<div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->usage";
}
    
    ?></span></div>
</a>
</div>
<div class="col-sm-6 col-lg-3">
<a href="javascript:void(0)" class="widget widget-hover-effect2 ">
<div class="widget-extra themed-background">
<h4 class="widget-content-light"><strong>Recieved</strong> Calls</h4>
</div>
<div class="widget-extra-full "><span class="h2 themed-color-dark animation-expandOpen"><?php 
foreach ($client->account->usage_records->$date->getIterator(0, 50, array(
        "Category" => "calls-inbound", 
    "From" => "$twilio_number"
    )) as $record
) {
    echo "$record->count";
    echo " - (";
    echo "$record->usage";
    echo ") Minutes";
}
    
    ?></span></div>
</a>
</div>
</div>
    <?php } ?>
</div>    
    </div>
    </div>
    
<?php
}elseif($twilio_areacode==true){ 
    
    $numbers = $client->account->available_phone_numbers->getList('US', 'Local', array(
        "AreaCode" => "$twilio_areacode"
    ));
    $results = count($numbers->available_phone_numbers);
    if($results >= 1){
    ?>
        <div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>View and Buy a Custom Phone Number</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <select class="form-control" name="buy-twilio">
                            <?php foreach($numbers->available_phone_numbers as $number) { ?>
                            <option value="<?php echo $number->phone_number;?>"><?php echo $number->phone_number;?></option> <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <a class="btn btn-sm btn-info" name="reset" href="#newarea" data-toggle="modal" data-placement="bottom">Enter New Area Code</a>
                        <button type="submit" class="btn btn-sm btn-success" name="complete">Complete Purchase</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
    <?php
    }else { ?>
            <div class="col-sm-4">
            <!-- Example Form Block -->
                <div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="fa fa-check-circle"></i> Sorry, Please Enter a Differn't Area Code</h4>
</div>
            <div class="block">
                
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>View and Buy a Custom Phone Number</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="area" name="area" class="form-control" placeholder="3 Digit Area Code">
                            <span class="input-group-addon"><i class="gi gi-phone"></i></span>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">View Available Phone Numbers</button>
                    </div> 
                    </div>
                </form>
                <!-- END Example Form Content -->
                    
            </div>
            <!-- END Example Form Block -->
        
        
    </div>
    <?php
    }
}
else{
?>
    <div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>View and Buy a Custom Phone Number</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="area" name="area" class="form-control" placeholder="3 Digit Area Code">
                            <span class="input-group-addon"><i class="gi gi-phone"></i></span>
                    </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">View Available Phone Numbers</button>
                    </div> 
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div> 
    <?php } ?>
    
    
    
</div> 
<!-- END Page Content -->

<?php include 'inc/footer_other.php'; ?>

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