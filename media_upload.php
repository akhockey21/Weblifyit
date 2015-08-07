
<?php
require_once 'app/init.php';
use Hazzard\Support\MessageBag;

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
    mkdir($path, 0775, true);
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
