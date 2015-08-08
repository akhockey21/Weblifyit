<?php
/**
 * page_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page
 *
 */
?>
<!-- Load modals -->
	<?php echo View::make('modals.load'); ?>
            <!-- Footer -->
            <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- END User Settings -->
<div id="confirmtemplate" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title">Choose This Theme?</h2>
                <h3 id="tempname" class="modal-title themed-color-modern"></h3>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="widget">
<div class="widget-extra-full themed-background-modern">
<div id="widget-carousel3" class="carousel slide remove-margin">
<div class="carousel-inner">
<div class="active item">
<img src="/templates/screenshots/template_images/1.png" alt="image">
</div>
</div>
</div>
</div>
</div>
                <form action="" method="post"  class="form-horizontal form-bordered">
                    <input id="template-id" type="text" name="templateid" value="" hidden>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Go Back</button>
                            <button type="submit" class="btn btn-sm btn-success" name="confirm">Save Theme</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<!-- END User Settings -->
<div id="addpage" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-user"></i> Add a Page</h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="post"  class="form-horizontal form-bordered">
<input type="text" id="newpageidval" name="page" hidden> 
							<div class="form-group">
			        <label for="pagename">Page Name <em>(required)</em></label>
			        <input type="text" name="pagename" id="newpagename" class="form-control">
			    </div>
                        <div class="form-group">
                            <label class="control-label">Hide page in navigation</label> 
                            
                                <label class="switch switch-primary" for="pagenavoption">
                                    <input type="checkbox" id="pagenavoption" name="pagenavoption">
                                    <span data-toggle="tooltip" title="No, I do not want this page to show up on the website's main navigation bar"></span>
                                </label>
                            
                            
                        </div>
            <div class="form-group">
<label class="control-label" for="example-chosen">Page Layout:</label>
<select id="example-chosen" name="pagestyle" class="select-chosen" data-placeholder="Public">
<option value="tallheader">About Us</option>
<option value="shortheader">Services/Products</option><option value="shortheader">Information</option>
    <option value="landingpage">Landing Page</option>
    <option value="noheader">No Header</option>
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
		        <input type="text" name="pagetitle" id="pagetitle" class="form-control">
		    </div>
    <div class="form-group">
		        <label for="pagedescription">Page Description: <em>(Suggested)</em></label>
		        <input type="text" name="pagedescription" id="pagedescription"  class="form-control">
		    </div>

                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" name="submit">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
		


<?php
if(isset($display_mediaAdder)){
    if($display_mediaAdder == true){
    include 'models/media/media-adder.php';
}
}
?>
		