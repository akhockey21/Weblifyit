<?php

//this will be a for each page loop that outputs the html file for each page. Using if statements for each block of the website such as header. homepage is the only exclusion that will have a differnt header so for that there is an added if statement.

//get build info from database
$fpage= $_GET['pageid'];
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
?>
<?php include 'parts/head.php'; ?>

<?php include 'parts/header.php'; ?>
<?php include 'parts/afterheader.php'; ?>

<?php include 'parts/footer.php'; ?>
