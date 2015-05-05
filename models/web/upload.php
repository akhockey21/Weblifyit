<?php

$path = Userwebsite::get(Auth::user()->id, 'path', true);
$usrId = Auth::user()->id;
if (!file_exists("uploads/$usrId")) {
    mkdir("uploads/$usrId", 0777, true);
}

$path = $path . "uploads";

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = "uploads/$usrId";   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
    
    if($path==true){
if (!file_exists("uploads/$usrId")) {
    mkdir("uploads/$usrId", 0777, true);
}else{
    continue;
}
    $targetPathWeb = dirname( __FILE__ ) . $ds. $path . $ds;
    $targetFileWeb =  $targetPathWeb. $_FILES['file']['name'];
        move_uploaded_file($tempFile,$targetFileWeb);
    }
} 
?> 