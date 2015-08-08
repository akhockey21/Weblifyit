<?php
/**
 * Include for the footer,
 * 
 * There are going to be multiple types of the media adder. For instance, there may be one to only select one image, or multiple images. One may be to select just a video, and so on. These arent developed yet, but will be soon.
 * 
 * ^ This can be done by declaring a specific variable on each page. Such as $type_of_media_adder = "image-single"; and so on.
 */ 

?>
<!-- Media Adder -->
<div id="media-adder" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
<button type="button" class="btn btn-sm btn-primary pull-right" style="margin-right: 8px;">Save</button>
<button type="button" class="btn btn-sm btn-default pull-right" data-dismiss="modal" aria-hidden="true" style="margin-right: 8px;">Close</button>
                <h4 class="modal-title"> Your Files</h4>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body"> 
                <div class="row">
        <div class="col-md-5 col-lg-4">
            <!-- Navigation Block -->
            <div class="block full">
                <!-- Navigation Title -->
                <div class="block-title">
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
                            <i class="fa fa-fw fa-film text-danger icon-push"></i> <strong>Videos</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="photo">
                            <i class="fa fa-fw fa-picture-o text-success icon-push"></i> <strong>Images</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="music">
                            <i class="fa fa-fw fa-music text-info icon-push"></i> <strong>Audio</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="book">
                            <i class="fa fa-fw fa-book text-warning icon-push"></i> <strong>Documents</strong>
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
                    <h2><i class="fa fa-cloud-upload"></i> Upload <strong>File</strong></h2>
                </div>
                <!-- END Upload Title -->

                <!-- Upload Content -->
                <form action="media_upload.php?id=<?php $uniqueDomainID = WebsiteSettings::get(Auth::user()->id, 'website_path', true);
if (!$uniqueDomainID) {
    $uniqueDomainID = uniqid();
    WebsiteSettings::update(Auth::user()->id, 'website_path', $uniqueDomainID);
    $uniqueDomainID = WebsiteSettings::get(Auth::user()->id, 'website_path', true);
}
echo $uniqueDomainID; ?> " class="dropzone dz-clickable">
    </form>
                <!-- END Upload Content -->
            </div>
            <!-- END Upload Block -->
        </div>
        <div class="col-md-7 col-lg-8">
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