<?php 
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$domainsetup = Userwebsite::get(Auth::user()->id, 'domainsetup', true);
$usesdomain = Userwebsite::get(Auth::user()->id, 'usesdomain', true);
$step = Userwebsite::get(Auth::user()->id, 'step', true);

//get website info
$bizName = Usermeta::get(Auth::user()->id, 'business_name', true);
$bizPhone = Usermeta::get(Auth::user()->id, 'company_busines_phone', true);
$bizEmail = Usermeta::get(Auth::user()->id, 'company_email', true);
$bizSt = Usermeta::get(Auth::user()->id, 'company_address_st', true);
$bizCity = Usermeta::get(Auth::user()->id, 'company_address_city', true);
$bizState = Usermeta::get(Auth::user()->id, 'company_address_state', true);
$bizZip = Usermeta::get(Auth::user()->id, 'company_address_zip', true);
$bizYears = Usermeta::get(Auth::user()->id, 'company_years_in_business', true);

$logotext = Userwebsite::get(Auth::user()->id, 'logotext', true);
$uselogo = Userwebsite::get(Auth::user()->id, 'uselogo', true);
$webdescription = Userwebsite::get(Auth::user()->id, 'meta_description', true);
$webtitle = Userwebsite::get(Auth::user()->id, 'title', true); 
$maincolor = Userwebsite::get(Auth::user()->id, 'main_color', true); 
$sidecolor = Userwebsite::get(Auth::user()->id, 'side_color', true);

if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['bizname'])) {
                $bizname = $_POST['bizname'];
				Usermeta::update(Auth::user()->id, 'business_name', $bizname);
			} 
     if (isset($_POST['bizphone'])) {
                $bizphone = $_POST['bizphone'];
				Usermeta::update(Auth::user()->id, 'company_busines_phone', $bizphone);
			} 
     if (isset($_POST['bizemail'])) {
                $bizemail = $_POST['bizemail'];
				Usermeta::update(Auth::user()->id, 'company_email', $bizemail);
			} 
     if (isset($_POST['bizst'])) {
                $bizst = $_POST['bizst'];
				Usermeta::update(Auth::user()->id, 'company_address_st', $bizst);
			}
     if (isset($_POST['bizcity'])) {
                $bizcity = $_POST['bizcity'];
				Usermeta::update(Auth::user()->id, 'company_address_city', $bizcity);
			} 
     if (isset($_POST['bizstate'])) {
                $bizstate = $_POST['bizstate'];
				Usermeta::update(Auth::user()->id, 'company_address_state', $bizstate);
			} 
     if (isset($_POST['bizzip'])) {
                $bizzip = $_POST['bizzip'];
				Usermeta::update(Auth::user()->id, 'company_address_zip', $bizzip);
			} 
     if (isset($_POST['webtitle'])) {
                $webtitle = $_POST['webtitle'];
				Userwebsite::update(Auth::user()->id, 'title', $webtitle);
			} 
     if (isset($_POST['webdescription'])) {
                $webdescription = $_POST['webdescription'];
				Userwebsite::update(Auth::user()->id, 'meta_description', $webdescription);
			} 
     if (isset($_POST['uselogo'])) {
                $uselogo = $_POST['uselogo'];
				Userwebsite::update(Auth::user()->id, 'uselogo', $uselogo);
			} 
     if (isset($_POST['logotext'])) {
                $logotext = $_POST['logotext'];
				Userwebsite::update(Auth::user()->id, 'logotext', $logotext);
			}
     if (isset($_POST['maincolor'])) {
                $maincolor = $_POST['maincolor'];
				Userwebsite::update(Auth::user()->id, 'main_color', $maincolor);
			}
     if (isset($_POST['sidecolor'])) {
                $sidecolor = $_POST['sidecolor'];
				Userwebsite::update(Auth::user()->id, 'side_color', $sidecolor);
			}
} 
?>