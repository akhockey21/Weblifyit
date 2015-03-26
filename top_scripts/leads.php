<?php
if (isset($_POST['addlead']) && csrf_filter()) {

$name = strip_tags( trim( $_POST[ 'name' ] ) );
$email_address = strip_tags( trim( $_POST[ 'email' ] ) );
$phone_number = strip_tags( trim( $_POST[ 'phone' ] ) );  

$name = str_replace(",",";", $name);
$email_address = str_replace(","," ", $email_address);
$phone_number = str_replace(","," ", $phone_number);
    
$name = str_replace(";",";", $name);
$email_address = str_replace(";"," ", $email_address);
$phone_number = str_replace(";"," ", $phone_number);

//get time then combine all form info into one place
$leadate = date("Y-m-d h:i:sa");

$combineinfo = "$leadate,$name,$phone_number,$email_address";
    
//get current lead field
$firstleadrow = Userleads::get(Auth::user()->id, 'userlead', true);


//insert into backup
Userleads::add(Auth::user()->id, 'userleadbackup', $firstleadrow ,true);

//DO final Combine With new Lead and Old leads
$finalcombine = "$firstleadrow;$combineinfo";
$finalcombine = rtrim($finalcombine, ';');
//Insert Into User Leads appending combined data to end of field
Userleads::update(Auth::user()->id, 'userlead', $finalcombine);   
}
if (isset($_POST['saleammountbtn']) && csrf_filter()) {
    if (isset($_POST['saleammount'])) {
        $updatedsale = $_POST['saleammount'];
        $updatedsale = ",$updatedsale";
        $leadsaleid = $_POST['getsalesfromlead'];
        //use lead id and then replace the end number and then replace the original lead id in the sales table.
        $replacenumpos = strrpos($leadsaleid, ",");
        $getleadidlength = strlen($leadsaleid);
        $finalleadid = substr_replace($leadsaleid, $updatedsale, $replacenumpos);
        
        $origsales = Userleads::get(Auth::user()->id, 'lead_sales', true);
        $origsalesfinal = str_replace($leadsaleid, $finalleadid, $origsales);
        Userleads::update(Auth::user()->id, 'test', $origsalesfinal);
    }
}
if (isset($_POST['deleteleadbtn']) && csrf_filter()) {
    if (isset($_POST['delete-lead'])) {
        $deletedleads = Userleads::get(Auth::user()->id, 'deleted_leads', true);
        $newdeletedlead = $_POST['delete-lead'];
        $combine = "$newdeletedlead;$deletedleads";
        
        Userleads::update(Auth::user()->id, 'deleted_leads', $combine);
        //Start Delete Lead Process
        
        $getleads = Userleads::get(Auth::user()->id, 'userlead', true);
        $newdeletedlead = ";$newdeletedlead";
        $updateleads = str_replace($newdeletedlead, "", $getleads);
        $updateleads = rtrim($updateleads, ";");
        Userleads::update(Auth::user()->id, 'userlead', $updateleads);
        }
        
    }
if (isset($_POST['leadsale']) && csrf_filter()) {
    if (isset($_POST['user-sale-lead'])) {
                $saleammount = $_POST['user-sale-lead'];
        $leadident = $_POST['lead-id'];
        
        $lead_sales = Userleads::get(Auth::user()->id, 'lead_sales', true);
        $num_sales = substr_count($lead_sales, ';');
        if($num_sales==0){
            $submit = ";$leadident,$saleammount";
            Userleads::update(Auth::user()->id, 'lead_sales', $submit);
        }
        if($num_sales>=1){
            $submit = ";$leadident,$saleammount";
            $getleadsales = Userleads::get(Auth::user()->id, 'lead_sales', true);
            $combineleadsales = "$submit$getleadsales";
            Userleads::update(Auth::user()->id, 'lead_sales', $combineleadsales);
        }
        
    }
    
}
?>