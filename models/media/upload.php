<?php
/**
 * Upload Script For the Media Module
 */ 




/**
 * Get Unique id for upload path, if not one, then create it.
 */ 
/*
$uniqueDomainID = WebsiteSettings::get($userID, 'website_path', true);
if (!$uniqueDomainID) {
    $uniqueDomainID = uniqid();
    WebsiteSettings::update($userID, 'website_path', $uniqueDomainID);
}
$path = "userwebsites/web/$uniqueDomainID/uploads";

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}


$ds          = DIRECTORY_SEPARATOR;  //1
 
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $path . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
    
    if($path==true){
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}else{
    continue;
}
    $targetPathWeb = dirname( __FILE__ ) . $ds. $path . $ds;
    $targetFileWeb =  $targetPathWeb. $_FILES['file']['name']; 
        move_uploaded_file($tempFile,$targetFileWeb);
    }
} */
?> 
<?php
//require_once '../../app/init.php';
//use Hazzard\Support\MessageBag;

if (isset($_GET['id']) && csrf_filter()) {
    if (isset($_GET['id'])) {
     $uniqueDomainIDInput = $_GET['id'];
    }
}else{
    //return failure.
}

$userID = DB::table('website_settings')->where('meta_value', "$uniqueDomainIDInput")->pluck('user_id');
$uniqueDomainID = WebsiteSettings::get($userID, 'website_path', true);

$path = "userwebsites/web/$uniqueDomainID/uploads";

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}


$upload_dir = $path;
if (!empty($_FILES)) 
{ 
     $tempFile = $_FILES['file']['tmp_name'];//this is temporary server location
     
     // using DIRECTORY_SEPARATOR constant is a good practice, it makes your code portable.
     $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;
     
     // Adding timestamp with image's name so that files with same name can be uploaded easily.
     $mainFile = $uploadPath.time().'-'. $_FILES['file']['name'];
     
     move_uploaded_file($tempFile,$mainFile);
}
?>
