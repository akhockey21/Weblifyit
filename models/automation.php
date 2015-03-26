<?php
require_once 'automation/Services/Twilio.php';

$AccountSid = "ACbb3c4e8db938b277cadbb80bca1ddf87";
$AuthToken = "e79fb3595833bcc67c89e99b67299362";

$client = new Services_Twilio($AccountSid, $AuthToken);

$stores = Usermeta::get(Auth::user()->id, 'stores', true);
$num_stores = substr_count($stores, ';');
$store_model = Usermodels::get(Auth::user()->id, 'addstores', 1);
$smsauto = Usermeta::get(Auth::user()->id, 'automation_sms', true);
    $callauto = Usermeta::get(Auth::user()->id, 'automation_call', true);
    $emailauto = Usermeta::get(Auth::user()->id, 'automation_email', true);

if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['automation_sms'])) {
                $automation_sms = $_POST['automation_sms'];
				Usermeta::update(Auth::user()->id, 'automation_sms', $automation_sms);
			} 
     if (isset($_POST['automation_call'])) {
                $automation_call = $_POST['automation_call'];
				Usermeta::update(Auth::user()->id, 'automation_call', $automation_call);
			} 
     if (isset($_POST['automation_email'])) {
                $automation_email = $_POST['automation_email'];
				Usermeta::update(Auth::user()->id, 'automation_email', $automation_email);
			} 
    
    
    if (isset($_POST['leadalerts_email'])) {
                $leadalerts_email = $_POST['leadalerts_email'];
				Usermeta::update(Auth::user()->id, 'leadalerts_email', $leadalerts_email);
			} 
    if (isset($_POST['leadalerts_sms'])) {
                $leadalerts_sms = $_POST['leadalerts_sms'];
				Usermeta::update(Auth::user()->id, 'leadalerts_sms', $leadalerts_sms);
			} 
    if (isset($_POST['leadalerts_call'])) {
                $leadalerts_call = $_POST['leadalerts_call'];
				Usermeta::update(Auth::user()->id, 'leadalerts_call', $leadalerts_call);
			} 
    
    
     if (isset($_POST['automation_message_sms'])) {
                $automation_message_sms = $_POST['automation_message_sms'];
				Usermeta::update(Auth::user()->id, 'automation_message_sms', $automation_message_sms);
			} 
     if (isset($_POST['automation_message_call'])) {
                $automation_message_call = $_POST['automation_message_call'];
				Usermeta::update(Auth::user()->id, 'automation_message_call', $automation_message_call);
			} 
     if (isset($_POST['automation_message_email'])) {
                $automation_message_email = $_POST['automation_message_email'];
				Usermeta::update(Auth::user()->id, 'automation_message_email', $automation_message_email);
			} 
    
         if (isset($_POST['automation_message_sms_customer'])) {
                $automation_message_sms_customer = $_POST['automation_message_sms_customer'];
				Usermeta::update(Auth::user()->id, 'automation_message_sms_customer', $automation_message_sms_customer);
			} 
     if (isset($_POST['automation_message_call_customer'])) {
                $automation_message_call_customer = $_POST['automation_message_call_customer'];
				Usermeta::update(Auth::user()->id, 'automation_message_call_customer', $automation_message_call_customer);
			} 
     if (isset($_POST['automation_message_email_customer'])) {
                $automation_message_email_customer = $_POST['automation_message_email_customer'];
				Usermeta::update(Auth::user()->id, 'automation_email_customer', $automation_message_email_customer);
			} 
}

if (isset($_POST['testcustomerautomation']) && csrf_filter()) {

    $phonenumber = $_POST['tstphone'];
    $leadname = $_POST['tstname'];
    $leademail = $_POST['tstemail'];
    
    if($smsauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_sms', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_sms_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$phonenumber",
		    "$messagebody"
		);
    }
    if($callauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_call', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_call_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $messagebody = "$messagebody , Press 1 to connect to customer.";
        
        $xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="2">'.$messagebody.'</Say></Gather><Dial timeout="30">'.$phnalert.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
		$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

		try {
			$call = $client->account->calls->create(
			    "4805264296",
			    "$phonenumber",
			    $url
			 );
		} catch (Exception $e) {
			// $status = "Unable to call service provider.";
			file_put_contents('call.txt', 'Error: ' . $e->getMessage());
		}
        
    }
    if($emailauto==1){
        
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_email_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
        
$data = array('body' => $messagebody);
Mail::send('emails.email', $data, function($message) use ($leademail, $leadname) {
    $message->to($leademail, $leadname);
    $message->subject('Test Customer Automation - Weblifyit!');
}); 
        
    } 
}

if (isset($_POST['testleadnotifcation']) && csrf_filter()) {
    
    $phonenumber = $_POST['phone'];
    $leadname = $_POST['name'];
    $leademail = $_POST['email'];
    
    if($smsauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_sms', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_sms', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$phnalert",
		    "$messagebody"
		);
    }
    if($callauto==1){
        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_call', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_call', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    $messagebody = "$messagebody , Press 1 to connect to customer.";
        
        $xml = '<Response><Gather timeout="60" finishOnKey="1"><Say loop="2">'.$messagebody.'</Say></Gather><Dial timeout="30">'.$phnalert.'</Dial><Say>We are sorry. There was a problem.</Say></Response>';
		
		 
		$url = "http://twimlets.com/echo?Twiml=".urlencode($xml);

		try {
			$call = $client->account->calls->create(
			    "4805264296",
			    "$phnalert",
			    $url
			 );
		} catch (Exception $e) {
			// $status = "Unable to call service provider.";
			file_put_contents('call.txt', 'Error: ' . $e->getMessage());
		}
        
    }
    if($emailauto==1){
        
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_email', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
        
$data = array('body' => $messagebody);
Mail::send('emails.email', $data, function($message) use ($leademail, $leadname) {
    $message->to($leademail, $leadname);
    $message->subject('Test Lead Notification - Weblifyit!');
}); 
        
    }
   
}

if (isset($_POST['addstore']) && csrf_filter()) {
    
    $street = $_POST['street_name'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    
    $storeid1 = Usermeta::get(Auth::user()->id, 'num_stores', true);
    $storeid = $storeid1 + 1;
    $combine = "$storeid,$street,$city,$zip,$state,$email,$phonenumber";
    $final_combine = "$stores;$combine";
    Usermeta::update(Auth::user()->id, 'stores', $final_combine);
    Usermodels::update(Auth::user()->id, 'addstores', 1);
    if($storeid1<1){
        Usermeta::update(Auth::user()->id, 'num_stores', 1);
    }
    if($storeid1<=1){
        Usermeta::update(Auth::user()->id, 'num_stores', $storeid);
    }
    
}


?>

<!-- Progress Bar Wizard Block -->
    <div class="block">
        <!-- Progress Bars Wizard Title -->
        <div class="block-title">
            <h2><strong>Automation Setup</strong> Wizard</h2>
        </div>
        <!-- END Progress Bar Wizard Title -->

        <!-- Progress Bar Wizard Content -->
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="block-section">
                    <h3 class="sub-header text-center"><strong>Fully Customize Your Automation In 4 Easy Steps!</strong></h3>
                    <p class="clearfix"><i class="fa fa-plus fa-5x text-primary pull-left"></i>Sign up today and receive <span class="text-success"><strong>30% discount</strong></span> on all plans! Our web application will save you time and enable you to work faster and more efficiently.</p>
                    <p>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-block">Learn More.. <i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <!-- Wizard Progress Bar, functionality initialized in js/pages/formsWizard.js -->
                <div class="progress progress-striped active">
                    <div id="progress-bar-wizard" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                </div>
                <!-- END Wizard Progress Bar -->

                <!-- Progress Wizard Content -->
                <form id="progress-wizard" action="" method="post" class="form-horizontal">
                    <!-- First Step -->
                    <div id="progress-first" class="step">
                        <h2>Do you want to enable these automation peices for your customers and your stores?</h2>
                        <div class="form-group">
                            <label class="col-md-4 control-label">SMS (Text Message)</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="automation_sms">
                                    <input type="checkbox" id="automation_sms" name="automation_sms" value="1">
                                    <span data-toggle="tooltip" title="Yes, Add Instant Text Messages To My Leads"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone (Instant Phone Call Alert To Your Store)</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="automation_call">
                                    <input type="checkbox" id="automation_call" name="automation_call" value="1">
                                    <span data-toggle="tooltip" title="Yes, Instantly call my store when a new lead comes through the website."></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Automation (Email)</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="automation_email">
                                    <input type="checkbox" id="automation_email" name="automation_email" value="1">
                                    <span data-toggle="tooltip" title="Yes, Instantly send my leads an email with my stores information after they submit a lead."></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="progress-second" class="step">
                         <h2>Update Your Information For Lead Alerts</h2>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="leadalerts_email">Email</label>
                            <div class="col-md-8">
                                <input type="text" id="leadalerts_email" name="leadalerts_email" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="leadalerts_sms">Cell Phone For SMS Alerts</label>
                            <div class="col-md-8">
                                <input type="text" id="leadalerts_sms" name="leadalerts_sms" class="form-control" placeholder="Enter Your Cell Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="leadalerts_call">Stores Phone For Call Alerts</label>
                            <div class="col-md-8">
                                <input type="text" id="leadalerts_call" name="leadalerts_call" class="form-control" placeholder="Enter Your Stores Phone Number">
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <div id="progress-third" class="step">
                        <h2>What would you like your alerts to look like?</h2>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_sms">SMS Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_sms" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_call">Call Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_call" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_email">Email Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_email" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>

                            </div>
                        </div>
                        
                    </div>
                    <!-- END Third Step -->
                    
                    <!-- fourth Step -->
                    <div id="progress-fourth" class="step">
                        <h2>Choose what the customers see.</h2>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_sms_customer">SMS Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_sms_customer" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_call_customer">Call Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_call_customer" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="automation_message_email_customer">Email Message</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="automation_message_email_customer" rows="5" class="form-control">[store_name], You Have a New Lead: Name: [lead_name], Email: [lead_email], Phone: [lead_phone]</textarea>

                            </div>
                        </div>
                        
                    </div>
                    <!-- END Fourth Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next3" value="Next" name="submit">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Progress Wizard Content -->
            </div>
        </div>
        <!-- END Progress Bar Wizard Content -->
    </div>
    <!-- END Progress Bar Wizard Block -->
<div class="row">
<div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Test Customer Automation</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="name" name="tstname" class="form-control" placeholder="Enter Name">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="email" name="tstemail" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" id="phone" name="tstphone" class="form-control" placeholder="Enter Phone Number">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="testcustomerautomation">Test Customer Automation</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>

<div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Test New Lead Notification</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="testleadnotifcation">Test New Lead Automation</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>

<div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Add Store To Automation</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="" class="form-bordered" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="street_name" name="street_name" class="form-control" placeholder="Street Name">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                            <div class="input-group">
                            <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip Code">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" id="state" name="state" class="form-control" placeholder="State">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Store Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Store Phone Number">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success" name="addstore">Add Store</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
    
            <!-- END Example Form Block -->
   </div>
</div>
    <?php

if (isset($_GET['deleteid'])) {
$deleteid = $_GET['deleteid'];
    
    $row = explode(";", $stores);
    foreach ($row as $rowleads){
        $get = substr($rowleads, 0, 1);
        if($get==$deleteid){
            $delete = ";$rowleads";
            $replace = str_replace($delete, "", "$stores");
            
            Usermeta::update(Auth::user()->id, 'stores', $replace);
            $ifblank = Usermeta::get(Auth::user()->id, 'stores', true);
            if($ifblank==''){
                Usermodels::update(Auth::user()->id, 'addstores', '0');
            }
        }
}
}

if (isset($_GET['testid'])) {
$testid = $_GET['testid'];
    $row = explode(";", $stores);
    foreach ($row as $rowleads){
        $get = substr($rowleads, 0, 1);
        if($get==$testid){
              $row1 = explode(",", $rowleads);
            $message = $client->account->messages->sendMessage(
		    "4805264296",
		    "$row1[6]",
		    "Store Test"
		);
            
        }
    }

    /*
    $row = explode(";", $stores);
    foreach ($row as $rowleads){
        $get = substr($rowleads, 0, 1);
        if($get==$testid){
            $pieces = explode(",", $rowleads);
                
                        $phnalert = Usermeta::get(Auth::user()->id, 'leadalerts_sms', true);
        $messageraw = Usermeta::get(Auth::user()->id, 'automation_message_sms_customer', true);
    $businessname = Usermeta::get(Auth::user()->id, 'business_name', true);
    $tags = array("[store_name]", "[lead_name]", "[lead_email]", "[lead_phone]");
    $replacetags = array("$businessname", "$leadname", "$leademail", "$phonenumber");
                
    
    $messagebody = str_replace($tags, $replacetags, $messageraw);
    
            
        }
}
*/
}
$store_model = Usermodels::get(Auth::user()->id, 'addstores', 1);
       if($store_model==1){  
           $stores = Usermeta::get(Auth::user()->id, 'stores', true);
$num_stores = substr_count($stores, ';');
    $stores = substr($stores, 1);
     $row = explode(";", $stores);
    ?>
<div class="row">
<div class="col-sm-12">
<div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><strong>Your Stores</strong> Summary</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
    <td>Store #</td>
    <td>Street</td>
    <td>City</td> 
    <td>Zip Code</td>
    <td>State</td>
    <td>Email</td>
    <td>Phone #</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php foreach ($row as $rowleads){
            echo '<tr>';
            $pieces = explode(",", $rowleads);
        
                foreach ($pieces as $piece){
                    echo '<td>';
                    echo $piece;
                    echo '</td>';
                } ?>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="?testid=<?php $id = substr($rowleads, 0, 1); echo "$id"; ?>" data-toggle="tooltip" title="Test Automation" class="btn btn-success">Test Automation</a>
                                <a href="?deleteid=<?php $id = substr($rowleads, 0, 1); echo "$id"; ?>" data-toggle="tooltip" title="Delete Store" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
        <?php
            echo '</tr>';
            } ?>
                </tbody>
            </table>
        </div>
                </div>
        </div>
    </div>
<?php 
       } 
/*
if (isset($_GET['testid'])) {
$testid = $_GET['testid'];
    
if($testid==1){
    $row = explode(";", $stores);
    //$row["$testid"]
    foreach ($row as $rowleads){
        $get = substr($rowleads, 0, 1);
        if($get==$testid){
            $delete = ";$rowleads";
            $replace = str_replace($delete, "", "$stores");
            Usermeta::update(Auth::user()->id, 'stores', $replace);
        }
}
}
}
*/



?>
