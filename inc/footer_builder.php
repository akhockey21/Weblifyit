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
                <h2 class="modal-title">Choose This Template?</h2>
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
<img src="templates/screenshots/plumber/1.png" alt="image">
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
                            <button type="submit" class="btn btn-sm btn-success" name="confirm">Save Template</button>
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
<option value="contactus">Contact Us</option>
<option value="specific-product">Specfic Service</option>
<option value="aboutus">About Us</option>
<option value="services">Services/Products</option><option value="shortheader">Information</option>
    <option value="landingpage">Home Page</option>
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
		

<!-- END User Settings -->
<div id="pagetext" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-user"></i> Page Text Wizard</h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="post"  class="form-horizontal form-bordered">
<input type="text" id="newpageidval1" name="page" hidden> 
                    
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
		

<!-- END User Settings -->
<div id="websitesettings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"> 
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<ul class="nav nav-tabs" data-toggle="tabs">
<li class="active"><a href="#modal-tabs-profile">Logo & Colors</a></li>
<li class=""><a href="#modal-tabs-businesss" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cogs"></i> Business Information</a></li>
<li class=""><a href="#modal-tabs-seo" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cogs"></i> Search Engine Settings</a></li>
<li class=""><a href="#modal-tabs-domain" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cogs"></i> Domain Settings</a></li>
</ul>
    <form action="" method="post"  class="form-horizontal"> 
<div class="tab-content">
<div class="tab-pane active" id="modal-tabs-profile">Profile..</div>
<div class="tab-pane" id="modal-tabs-settings">Settings..</div>
<div class="tab-pane" id="modal-tabs-businesss">Business Info..</div>
<div class="tab-pane" id="modal-tabs-seo">Search Engine Info..</div>
<div class="tab-pane" id="modal-tabs-domain">domain Info..</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-sm btn-primary">Save changes</button>
</div>
    </form>
</div>
    </div>
</div>




