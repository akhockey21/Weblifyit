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
		<h3 class="page-header">Edit Page</h3>
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
			        <label for="pagename">Page Name <em>(required)</em></label>
			        <input type="text" name="pagename" id="pagename" value="<?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?>" class="form-control">
			    </div>
                        <div class="form-group">
                            <label class="control-label">Hide page in navigation</label> 
                            
                                <label class="switch switch-primary" for="pagenavoption">
                                    <input type="checkbox" id="pagenavoption" name="pagenavoption" value="<?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'navhide', true); ?>">
                                    <span data-toggle="tooltip" title="No, I do not want this page to show up on the website's main navigation bar"></span>
                                </label>
                            
                            
                        </div>
            <div class="form-group">
<label class="control-label" for="example-chosen">Page Layout:</label>
<select id="example-chosen" name="pagestyle" class="select-chosen" data-placeholder="Public">
<option value="tallheader">Tall Header</option>
<option value="shortheader">Short Header</option>
    <option value="noheader">No Header</option>
    <option value="landingpage">Landing Page</option>
    <option value="titlepage">Title Page</option>
</select>
            </div>
            <div class="form-group">
<label class="control-label" for="example-chosen">Visibility:</label>
<select id="example-chosen" name="visibility" class="select-chosen" data-placeholder="Public">
<option value="public">Public</option>
<option value="hidden">Un-published</option>
</select>
            </div>
			
			<div class="form-group">
		        <label for="pagetitle">Page Title: <em>(required)</em></label>
		        <input type="text" name="pagetitle" id="pagetitle" value="<?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'title', true); ?>" class="form-control">
		    </div>
    <div class="form-group">
		        <label for="pagedescription">Page Description: <em>(Suggested)</em></label>
		        <input type="text" name="pagedescription" id="pagedescription" value="<?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'description', true); ?>" class="form-control">
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