
<?php 
$leadtest = Userleads::get(Auth::user()->id, 'userlead', true);
$leadsales = Userleads::get(Auth::user()->id, 'lead_sales', true);
if ($leadtest==true){
             $day = 0;
            $month = 0;
            $week = 0;
            $row = explode(";", $leadtest);
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
     $row = explode(";", $leadtest);
    ?>
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        + <strong><?php echo $day ?></strong><br>
                        <small>Leads Today</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        + <strong><?php echo $week ?></strong><br>
                        <small>Leads This Week</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        + <strong><?php echo $month ?></strong><br>
                        <small>Leads This Month</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        You Have <strong><?php echo substr_count($leadtest, ';') + 1; ?></strong><br>
                        <small>Total Leads</small>
                    </h3>
                </div>
            </a>
</div>
</div>
            <!-- END Widget -->
    <?php
        }
if ($leadsales==true){
            $day_sales = 0;
            $month_sales = 0;
            $week_sales = 0;
    $allsales = 0;
            $row = explode(";", $leadsales);
            foreach ($row as $rowdates){
                $peice = explode(",", $rowdates);
                 //$current = strtotime(date("Y-m-d"));
                $date = substr($rowdates, 0, 10);

 $my_date = date('Y-m-d', strtotime($date));
                //echo $my_date;
                $current = date('Y-m-d');
               
                if($my_date==$current){
                $day_sales = $day_sales + $peice[2];
                
                }
                if(strtotime($my_date) > strtotime('1 month ago')){
                   $month_sales = $month_sales + $peice[2];
                }
                if(strtotime($my_date) > strtotime('1 week ago')){
                  $week_sales = $week_sales + $peice[2];
                }
                if(strtotime($my_date) > strtotime('5 year ago')){
                   $allsales = $allsales + $peice[2];
                }
            
            
            }
?>
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        $<strong><?php echo $day_sales ?></strong><br>
                        <small>Lead Revenue Today</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        $<strong><?php echo $week_sales ?></strong><br>
                        <small>Lead Revenue This Week</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        $<strong><?php echo $month_sales ?></strong><br>
                        <small>Lead Revenue This Month</small>
                    </h3>
                </div>
            </a>
</div>
            <!-- END Widget -->
  <div class="col-sm-6 col-lg-3">
                <!-- Widget -->
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-usd"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        You Have <strong>$<?php echo $allsales; ?></strong><br>
                        <small>Total lead Revenue</small>
                    </h3>
                </div>
            </a>
</div>
</div>
            <!-- END Widget -->
    <?php
        }
?>