<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
//get website info
$bizName = Usermeta::get(Auth::user()->id, 'business_name', true);
$bizPhone = Usermeta::get(Auth::user()->id, 'company_busines_phone', true);
$bizEmail = Usermeta::get(Auth::user()->id, 'company_email', true);
$bizSt = Usermeta::get(Auth::user()->id, 'company_address_st', true);
$bizCity = Usermeta::get(Auth::user()->id, 'company_address_city', true);
$bizState = Usermeta::get(Auth::user()->id, 'company_address_state', true);
$bizZip = Usermeta::get(Auth::user()->id, 'company_address_zip', true);
$bizYears = Usermeta::get(Auth::user()->id, 'company_years_in_business', true);

$title = "Title";
$meta_description = "description";
//get website content
$category = Userwebsite::get(Auth::user()->id, 'category', true);
$path = Userwebsite::get(Auth::user()->id, 'path', true);
//get parameters to retrieve content for template
$templateinfo = DB::table('templates')->where('template_name', '=', $category)->first();
$templateid = $templateinfo->template_id;
$main_parameters = explode(";", $templateinfo->parameters);
$parameters = explode(",", $main_parameters[0]);
$images = explode(",", $main_parameters[1]);

//run loop and output the website content variables
$output = array();
foreach($parameters as $row){
    $webcontent = Userwebsite::get(Auth::user()->id, $row, true);
    if($webcontent==true){
        $output[] = $webcontent;
    }
    else{
        //get template text default
$templatetext = DB::table('templatetext')->where('template_id', '=', $templateid)->where('meta_key', '=', $row)->first();
        $output[] = $templatetext->meta_value;
    } 
    
}
$image_output = array();
//do the same but now get images
//image location if default
//$image_location = "../../images/$category/$image";
//
//
//in database it will look like metakey - metadata = 1.jpg - filename.jpg
//$image_location = "../../../$path/upload/$image";
//templates/templates/1/
foreach($images as $image){
    $customimage = Userwebsite::get(Auth::user()->id, $image, true);
    if($customimage==true){
        $image_location = "userwebsites/web/$path/upload/$customimage";
        $image_output[] = $image_location;
    }
    else{
        $image_location = "templates/images/$category/$image";
        $image_output[] = $image_location;
    } 
    
}

?> 

<?php include 'templates/templates/1/index.php'; ?>