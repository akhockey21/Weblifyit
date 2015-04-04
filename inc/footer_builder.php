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
<option value="specificservice">Specfic Service</option>
<option value="aboutus">About Us</option>
<option value="services">Services/Products</option>
<option value="informational">Information</option>
<option value="homepage">Home Page</option>
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
            
<ul class="nav nav-tabs" data-toggle="tabs">
<li class="active"><a href="#modal-tabs-pagewizard">Page Text Wizard</a></li>
<li class=""><a href="#modal-tabs-advancedpageedit" data-toggle="tooltip" title=""><i class="fa fa-cogs"></i> Advanced Text Editor</a></li>
</ul>
        
<div class="tab-content">
    <div class="tab-pane active" id="modal-tabs-pagewizard">
            <!-- Modal Header -->
            <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button> 
                <h2 class="modal-title"><i class="fa fa-user"></i> Page Text Wizard: <strong><?php echo Userpages::get(Auth::user()->id, $page, 'pagename', true); ?></strong></h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <?php include 'web/pagetextedit.php'; ?> 
            </div>
            <!-- END Modal Body --></div>
    <div class="tab-pane" id="modal-tabs-advancedpageedit">
            <!-- Modal Header -->
            <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button> 
                <h2 class="modal-title"><i class="fa fa-user"></i> Advanced Page Text Editor: <strong><?php echo Userpages::get(Auth::user()->id, $page, 'pagename', true); ?></strong></h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
            </div>
            <!-- END Modal Body --></div>
            </div>
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
<div class="tab-pane active" id="modal-tabs-profile">
    
  <form method="post" action=""> 
<div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="maincolor">Main Website Color</label>
                                <input type="text" id="example-colorpicker" name="maincolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $maincolor?>">
                            </div>
                        </div>
<div class="form-group">
                            <div class="col-md-12">
        
                            <label class="control-label" for="sidecolor">Side Website Color</label>
                                <input type="text" id="example-colorpicker" name="sidecolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $sidecolor ?>"> 
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-md-12">
                            <label class="control-label">Use Logo?</label>
                                <label class="switch switch-primary" for="uselogo">
                                    <input type="checkbox" id="uselogo" name="uselogo" value="1">
                                    <span data-toggle="tooltip" title="Yes, use my logo rather than text."></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="logotext">Logo Text</label>
                                <input type="text" id="logotext" name="logotext" class="form-control" placeholder="Logo Text" value="<?php echo $logotext ?>">
                            </div> 
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-primary" name="submit">Save Changes</button>
                    </div>
</form>
    <form class="dropzone dz-clickable themed-background"><div class="dz-default dz-message"><span>Drop Logo Here</span></div>
    </form>
    </div>
<div class="tab-pane" id="modal-tabs-settings">Settings..</div>
<div class="tab-pane" id="modal-tabs-businesss"><form method="post" action=""> 
<div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizname">Business Name</label>
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name" value="<?php echo $bizName ?>">
                            </div>
                        </div>
  <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizphone">Business Phone</label>
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone" value="<?php echo $bizPhone ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizemail">Business Email</label>
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email" value="<?php echo $bizEmail ?>">
                            </div>
                    </div>
    <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizst">Street Name</label>
                                <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Enter Your Business' Street Name" value="<?php echo $bizSt ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizcity">City</label>
                                <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Enter Your Business' City" value="<?php echo $bizCity ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizstate">State</label>
                                <input type="text" id="bizstate" name="bizstate" class="form-control" placeholder="Enter Your Business State" value="<?php echo $bizState ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                            <label class="control-label" for="bizzip">Zip Code</label>
                                <input type="text" id="bizzip" name="bizzip" class="form-control" placeholder="Enter Your Business Zip Code" value="<?php echo $bizZip ?>">
                            </div>
                        </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-primary" name="submit">Save Changes</button>
                    </div>
</form></div>
<div class="tab-pane" id="modal-tabs-seo"> <form method="post" action=""> 
<div class="form-group"> 
                            
                            <div class="col-md-12">
                                <label class="control-label" for="webtitle">Website Title</label>
                                <input type="text" id="webtitle" name="webtitle" class="form-control" placeholder="Website Name" value="<?php echo $webtitle ?>"> 
                            </div>
                        </div>
  <div class="form-group">
                            
                            <div class="col-md-12">
                            <label class="control-label" for="webdescription">Website Description</label>
                                <textarea id="webdescription" name="webdescription" class="form-control" placeholder="Enter Your Website Description"><?php echo $webdescription ?></textarea>
                            </div>
                        </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-primary" name="submit">Save Changes</button>
                    </div>
</form></div>
<div class="tab-pane" id="modal-tabs-domain">domain Info..</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
</div>
</div>
    </div>
</div>




