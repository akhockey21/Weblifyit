<?php
// Start output buffering
ob_start();
// run code in x.php file
//get website info
$bizName = Usermeta::get(Auth::user()->id, 'business_name', true);
$bizPhone = Usermeta::get(Auth::user()->id, 'company_busines_phone', true);
$bizEmail = Usermeta::get(Auth::user()->id, 'company_email', true);
$bizSt = Usermeta::get(Auth::user()->id, 'company_address_st', true);
$bizCity = Usermeta::get(Auth::user()->id, 'company_address_city', true);
$bizState = Usermeta::get(Auth::user()->id, 'company_address_state', true);
$bizZip = Usermeta::get(Auth::user()->id, 'company_address_zip', true);
$bizYears = Usermeta::get(Auth::user()->id, 'company_years_in_business', true);
?>
Business Name: <?php echo $bizName ?> 
<br>
Business Address: <?php echo "$bizSt $bizCity $bizState, $bizZip" ?>
<br>
Business Phone: <?php echo $bizPhone ?> 
<br>
Business Email: <?php echo $bizEmail ?> 
<br>
Years in Business: <?php echo $bizYears ?>
<br>
<br>
<br>
<div id="edit">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et ultrices leo. In tincidunt tempor magna id vulputate. Suspendisse finibus, mi id malesuada tristique, ligula tellus faucibus felis, eget finibus purus lectus eu eros. Proin ante odio, consectetur sed massa eleifend, dignissim laoreet libero. In tristique vestibulum sapien, in consequat libero congue at. Sed eget ipsum enim. Cras venenatis purus diam, eget semper urna dignissim eget. Integer tincidunt vestibulum metus, vel porta lorem. Cras gravida dui ac lectus eleifend, eget feugiat neque dictum. Proin at hendrerit justo, vel interdum est.
</div>
<?php
// saving captured output to file
file_put_contents('filename.html', ob_get_contents());
// end buffering and displaying page
ob_end_clean();

?>
