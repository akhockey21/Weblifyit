<?php require_once '../app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
?>
<?php
//get build info from database
$fpage = isset($_GET['pageid']) ? $_GET['pageid'] : '1';
$pagename = Userpages::get(Auth::user()->id, $fpage, 'pagename', true);  
$navhide =   Userpages::get(Auth::user()->id, $fpage, 'navhide', true); 
$style = Userpages::get(Auth::user()->id, $fpage, 'style', true); 
$visib =  Userpages::get(Auth::user()->id, $fpage, 'visibility', true); 
$title = Userpages::get(Auth::user()->id, $fpage, 'title', true); 
$descrip = Userpages::get(Auth::user()->id, $fpage, 'description', true); 
$bizName = Usermeta::get(Auth::user()->id, 'business_name', true);
$bizPhone = Usermeta::get(Auth::user()->id, 'company_busines_phone', true);
$bizEmail = Usermeta::get(Auth::user()->id, 'company_email', true);
$bizSt = Usermeta::get(Auth::user()->id, 'company_address_st', true);
$bizCity = Usermeta::get(Auth::user()->id, 'company_address_city', true);
$bizState = Usermeta::get(Auth::user()->id, 'company_address_state', true);
$bizZip = Usermeta::get(Auth::user()->id, 'company_address_zip', true);
$bizYears = Usermeta::get(Auth::user()->id, 'company_years_in_business', true);
$content = Userpages::get(Auth::user()->id, $fpage, 'pagedesign', true);
$categoryname = Userwebsite::get(Auth::user()->id, 'category', true); 
$category = DB::table('webcategories')->where('meta_value', $categoryname)->pluck('cat_id');
$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
$templateid = Userwebsite::get(Auth::user()->id, 'template_id', true);

$pagestyle = $style;
include "../templates/templates/$templateid/head.php"; 

//edit these to match each pagestyle.
include "../templates/templates/$templateid/header.php"; 
include "../templates/templates/$templateid/afterheader.php"; 

//GET PAGE STYLE BODY
if($pagestyle=="homepage"){
    include '../templates/templates/styles/homepage.php';
}elseif($pagestyle=="contactus"){
    include '../templates/templates/styles/contactus.php';
}elseif($pagestyle=="aboutus"){
    include '../templates/styles/aboutus.php';
}elseif($pagestyle=="services"){
    include '../templates/templates/styles/services.php';
}elseif($pagestyle=="specificservice"){
    include '../templates/styles/specificservice.php';
}elseif($pagestyle=="informational"){
    include '../templates/templates/styles/informational.php';
}else{
    //There is an error, no page style. Maybe show warning?
}

?>
<?php include "../templates/templates/$templateid/footer.php"; ?>
