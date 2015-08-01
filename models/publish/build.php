<?php
/**
 * Title: This model builds the users websites.
 * Notes: It does it gathering all the files into one place.
 */ 
include "templates/templates/$templateid/head.php"; 

//edit these to match each pagestyle.
include "templates/templates/$templateid/header.php"; 
include "templates/templates/$templateid/afterheader.php"; 


//GET PAGE STYLE BODY
if($pagestyle=="homepage"){
    include "templates/templates/styles/homepage/$pageStyleLayout.php";
}elseif($pagestyle=="contactus"){
    include "templates/templates/styles/contactus/$pageStyleLayout.php";
}elseif($pagestyle=="aboutus"){
    include "templates/templates/styles/about-us/$pageStyleLayout.php";
}elseif($pagestyle=="services"){
    include "templates/templates/styles/services/$pageStyleLayout.php";
}elseif($pagestyle=="specificservice"){
    include "templates/templates/styles/specificservice/$pageStyleLayout.php";
}elseif($pagestyle=="informational"){
    include "templates/templates/styles/informational/$pageStyleLayout.php";
}else{
    //There is an error, no page style. Maybe show warning?
}

?>
<?php include "templates/templates/$templateid/footer.php"; ?>
