<!-- Progress Bar Wizard Block -->

        <!-- Progress Bar Wizard Content -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Wizard Progress Bar, functionality initialized in js/pages/formsWizard.js -->
                <div class="progress progress-striped active">
                    <div id="progress-bar-wizard" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                </div>
                <!-- END Wizard Progress Bar -->

                <!-- Progress Wizard Content -->
                <form id="progress-wizard" action="" method="post" class="form-horizontal">
                    
<input type="text" name="pagestyle" value="<?php echo $pagestyle ?>" hidden>
                    <?php

    $questions = DB::table('templatetextquestions')->where('style', $pagestyle)->get(); 
    $question_count = count($questions);
    $countQ = 1;
    //later, you may want to change this code to make it devide by 2 so you have 2 questions per wizard step
    foreach($questions as $question){
        ?>
                    <div id="progress-<?php echo $countQ ?>" class="step">
                        <h2><?php echo $question->question; ?></h2>
                            <div class="col-md-12">
<div class="form-group">
                                <textarea name="question_<?php echo $countQ ?>" rows="4" class="form-control"><?php
            
            //get default web text, explode it, then based on $countQ, use that one. if not default web text, pull from DB
            $usertxt = Userwebsitetext::get(Auth::user()->id, $pagestyle, true);
            $defaulttxt = Userdefaulttext::get($categoryid, $pagestyle, true);
        if($usertxt==true){
            $countQ_m = $countQ - 1; 
            $usertxt_e = explode(';' , $usertxt);
            echo $usertxt_e[$countQ_m];
        }elseif($defaulttxt==true){
            $countQ_m = $countQ - 1;
            $usertxt_e = explode(';' , $defaulttxt);
            echo $usertxt_e[$countQ_m];
        }else{
            continue;
        }
            
            ?></textarea>
                            </div>
                        </div>
                    </div>
            
        <?php
    $countQ++;
    }
    ?>

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next3" value="Next" name="submitPageTextEdit">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Progress Wizard Content -->
            </div>
        </div>
        <!-- END Progress Bar Wizard Content -->