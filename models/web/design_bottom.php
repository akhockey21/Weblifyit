 <div id="page-content">
<div class="row">
    <h3>Choose a Page:</h3>
    <ul class="nav nav-pills">
    <?php

$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id; ?>
<li>
<a href="#" id="<?php echo $filter_result->page_id; ?>"><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></a>
</li>
                        <?php
}
?>
		</ul>
    
    <div class="col-md-6" id="editpage">
		<h3 class="page-header">Page Design</h3>
<?php 
$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id;
    ?>

<div id="<?php echo $filter_result->page_id; ?>edit" <?php if($filter_result->page_id != 1){?>style="display: none;"<?php } ?> class="animation-slideLeft">
		<form action="" method="POST">			<input type="text" name="page" value="<?php echo $filter_result->page_id; ?>" hidden>
							<div class="form-group">
			        <label for="pagename">Page Design <em>(required)</em></label>
			        <input type="text" name="pagedesign" id="pagename" value="<?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagedesign', true); ?>" class="form-control">
			    </div>

            <div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
						    </div>
		</form>
        </div>
<?php
}
?> 
		</div> 
    </div>
    </div> 