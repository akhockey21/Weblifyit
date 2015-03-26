<?php

function lead_data($userid, $leadtest){
            $day = 0;
            $month = 0;
            $week = 0;
            $row = explode(";", $leadtest);
            foreach ($row as $rowdates){
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
    
$leadstoday = $day;
$leadsweek =  $week;
$leadsmonth = $month;
$leadsall = $allleads = substr_count($leadtest, ';') + 1;
return array ($leadstoday, $leadsweek, $leadsmonth, $leadsall);
}
function lead_data_sales($userid, $leadsales){
            $day_sales = 0;
            $month_sales = 0;
            $week_sales = 0;
    $allsales = 0;
            $row = explode(";", $leadsales);
            foreach ($row as $rowdates){
                $peice = explode(",", $rowdates);
                $date = substr($rowdates, 0, 10);
 $my_date = date('Y-m-d', strtotime($date));
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

$salesday = $day_sales;
$salesweek = $week_sales;
$salesmonth = $month_sales;
$salesall = $allsales;

return array ($salesday, $salesweek, $salesmonth, $salesall);
}

//start

$users = DB::table('users')->get();

foreach ($users as $user) {
    $userid = $user->id;
     $autoreports_model = Usermodels::get($userid, 'autoreports', true);
    if($autoreports_model==1){
        $emailbody = array();
        $leadtest = Userleads::get($userid, 'userlead', true);
$leadsales = Userleads::get($userid, 'lead_sales', true);
        $leads = Userleads::get(Auth::user()->id, 'userlead', true);
        if ($leadtest==true){
            $string = array();
            list ($leadstoday, $leadsweek, $leadsmonth, $leadsall) = lead_data($userid, $leadtest);
            $string[]= "$user->display_name"; $string[]= ", Here is Your Weekly Report <br>";
            $string[]= "Leads Today: "; $string[]= $leadstoday; $string[]= "<br>";
            $string[]= "Leads This Week: "; $string[]= $leadsweek; $string[]= "<br>";
            $string[]= "Leads This Month: "; $string[]= $leadsmonth; $string[]= "<br>";
            $string[]= "Total Leads: "; $string[]= $leadsall; $string[]= "<br>";
            $string = join('',$string);
        $emailbody[]= $string; 
        }
        if ($leadsales==true){
            $body = array();
            list ($salesday, $salesweek, $salesmonth, $salesall) = lead_data_sales($userid, $leadsales);
            $body[]= "Sales From Leads Today: "; $body[]= $salesday; $body[]= "<br>";
            $body[]= "Sales From Leads This Week: "; $body[]= $salesweek; $body[]= "<br>";
            $body[]= "Sales From Leads This Month: "; $body[]= $salesmonth; $body[]= "<br>";
            $body[]= "Total Sales From Leads: "; $body[]= $salesall; $body[]= "<br>";
            $body = join('',$body);
        $emailbody[]= $body; 
        }
        if ($leads==true){
            $bodrow = array();
            $row = explode(";", $leads); 
            $bodrow[]= " 
            <table>
                <thead>
                    <tr>
    <td>Date</td>
    <td>Name</td>
    <td>Phone</td> 
    <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>";
                      foreach ($row as $rowleads){
            $pieces = explode(",", $rowleads);
        
                foreach ($pieces as $piece){ 
                    $bodrow[]= '<td>';
                    $bodrow[]= $piece;
                    $bodrow[]= '</td>';
                }
                $bodrow[]= '</tr>';
        }
            $bodrow[]= '</tbody></table><br>';
            $bodrow = join('',$bodrow);
        $emailbody[]= $bodrow;
    }
        
    $emailbody = join('',$emailbody);
        echo $emailbody;
        $useremail = $user->email;
        $username = $user->username;
        $data = array('body' => $emailbody);
Mail::send('emails.email', $data, function($message) use ($useremail, $username) {
    $message->to($useremail, $username);
    $message->subject('Weekly Report For Your Business From Weblifyit');
});
}
} 