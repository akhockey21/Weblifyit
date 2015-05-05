<?php  
//see if the user has text, if not then load default content
$usertext = Userwebsitetext::get(Auth::user()->id, '1-1', true);

if($usertext==true){
    $text = explode(";", $usertext); 
    ?>
<div class="container clearfix">

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[0]; ?></h4>
                        </div>

                        <p><?php echo $text[1]; ?></p>

                    </div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[2]; ?></h4>
                        </div>

                        <p><?php echo $text[3]; ?></p>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[4]; ?></h4>
                        </div>

                        <p><?php echo $text[5]; ?></p>

                    </div>

                </div> 
<?php
}else{
$defaulttext = Userdefaulttext::get($category, '1-1', true);
$text = explode(";", $defaulttext);
    ?>
    <div class="container clearfix">

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[0]; ?></h4>
                        </div>

                        <p><?php echo $text[1]; ?></p>

                    </div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[2]; ?></h4>
                        </div>

                        <p><?php echo $text[3]; ?></p>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4><?php echo $text[4]; ?></h4>
                        </div>

                        <p><?php echo $text[5]; ?></p>

                    </div>

                </div> 

<?php
}
?>