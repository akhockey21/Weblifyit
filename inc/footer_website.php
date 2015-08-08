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
		



<!-- Media Adder -->
<div id="media-adder" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"> Your Files</h4>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row">
        <div class="col-md-4 col-lg-3">
            <!-- Navigation Block -->
            <div class="block full">
                <!-- Navigation Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><i class="fa fa-compass"></i> Files <strong>Navigation</strong></h2>
                </div>
                <!-- END Navigation Title -->

                <!-- Filter by Type links -->
                <!-- Custom files functionality is initialized in js/pages/readyFiles.js -->
                <!-- Add the category value you want each link in .media-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
                <ul class="nav nav-pills nav-stacked nav-icons media-filter">
                    <li class="active">
                        <a href="javascript:void(0)" data-category="all">
                            <i class="fa fa-fw fa-folder-open themed-color-dark icon-push"></i> <strong>All</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="movie">
                            <i class="fa fa-fw fa-film text-danger icon-push"></i> <strong>Movies</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="photo">
                            <i class="fa fa-fw fa-picture-o text-success icon-push"></i> <strong>Photos</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="music">
                            <i class="fa fa-fw fa-music text-info icon-push"></i> <strong>Music</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="book">
                            <i class="fa fa-fw fa-book text-warning icon-push"></i> <strong>Books</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Filter by Type links -->
            </div>
            <!-- END Navigation Block -->

            <!-- Upload Block -->
            <div class="block full hidden-xs">
                <!-- Upload Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><i class="fa fa-cloud-upload"></i> Upload <strong>File</strong></h2>
                </div>
                <!-- END Upload Title -->

                <!-- Upload Content -->
                <form action="page_app_media.php" class="dropzone dz-clickable"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
                <!-- END Upload Content -->
            </div>
            <!-- END Upload Block -->
        </div>
        <div class="col-md-8 col-lg-9">
            <!-- Files Block -->
            <div class="block">
                <!-- Files Content -->
                <!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
                <div class="row media-filter-items">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>Classical</strong>.mp3<br>
                                <small>5 min | 7.3MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo7.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Food</strong>.jpg<br>
                                <small>5.3MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo2.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Bubble</strong>.jpg<br>
                                <small>3.2MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo1.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Mountain</strong>.jpg<br>
                                <small>6.4MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>The Movie</strong>.mov<br>
                                <small>190 min | 1.8GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>Mountain Trip</strong>.mov<br>
                                <small>75 min | 0.5GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>Blockbuster</strong>.mov<br>
                                <small>180 min | 1.2GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="book">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-pdf fa-5x text-warning"></i>
                            </div>
                            <h4>
                                <strong>HTML Tutorials</strong>.pdf<br>
                                <small>500 Pages | 6.2MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>Soundtrack</strong>.mp3<br>
                                <small>4 min | 4.9MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="book">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-pdf fa-5x text-warning"></i>
                            </div>
                            <h4>
                                <strong>The Scary Path</strong>.pdf<br>
                                <small>300 Pages | 1.5MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo16.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Bridge</strong>.jpg<br>
                                <small>3.9MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>New Sun</strong>.mp3<br>
                                <small>3 min | 3.5MB</small>
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- END Files Content -->
            </div>
            <!-- END Files Block -->
        </div>
    </div>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
		