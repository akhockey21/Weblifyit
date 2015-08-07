<?php
/**
 * Upload Script For the Media Module
 */ 
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
} 
?> 