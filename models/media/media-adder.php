<?php
/**
 * Include for the footer,
 * 
 * There are going to be multiple types of the media adder. For instance, there may be one to only select one image, or multiple images. One may be to select just a video, and so on. These arent developed yet, but will be soon.
 * 
 * ^ This can be done by declaring a specific variable on each page. Such as $type_of_media_adder = "image-single"; and so on.
 */ 

?>

<?php
$types_of_media = array(
    'videos',
    'images',
    'audio',
    'documents'
);

$types_of_media_display_options = array(
    'videos' => array(
        'data-category' => 'movie',
        'buttons-to-display' => '',
        'icon-image' => 'fi-mov',
        'color' => 'text-danger'
    ),
    'images' => array(
        'data-category' => 'photo',
        'buttons-to-display' => '',
        'icon-image' => 'fi-jpg',
        'color' => 'text-success'
    ),
    'audio' => array(
        'data-category' => 'music',
        'buttons-to-display' => '',
        'icon-image' => 'fi-mp3',
        'color' => 'text-info'
    ),
    'documents' => array(
        'data-category' => 'book',
        'buttons-to-display' => '',
        'icon-image' => 'fi-pdf',
        'color' => 'text-warning'
    )
);

$types_of_media_file_extensions = array(
    'videos' => array(
        '.mov',
        '.mp4'
    ),
    'images' => array(
        '.png',
        '.jpg',
        '.jpeg'
    ),
    'audio' => array(
        '.mp3',
    ),
    'documents' => array(
        '.pdf',
    )
);

/**
 * Function to check arrays, and sub arrays to find matches.
 *
 * Not being used right now
 * */ 
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}

//get parent name of a value in a multi D array
function get_media_type($needle, $haystack) {

    foreach ($haystack as $fileTypeKey => $fileType) {
        
        foreach ($fileType as $fileType_item) {
            
            if ($needle == $fileType_item)
                return $fileTypeKey;
            
        }
        
    }

    return false;
}

if(isset($type_of_media_adder)){
    $type_of_media_adder = explode(',', $type_of_media_adder);
    //Dont Display sorting if its only 1 type of document
    if(count($type_of_media_adder) == 1) $media_filter_no = 1; 
    
    // declare the types of files called
        $media_documents = in_array('documents', $type_of_media_adder);
        $media_audio = in_array('audio', $type_of_media_adder);
        $media_images = in_array('images', $type_of_media_adder);
        $media_videos = in_array('videos', $type_of_media_adder);
    /*
    //Find the files declared
    foreach($type_of_media_adder as $media_types_value){
        if(in_array($media_types_value, $types_of_media) == true)
    };
    */
    
    
    
} else{
    //Make it display all types of media and sorting
    $media_display_all = 1;
}
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
<?php
if(isset($media_filter_no)){
} else{
    
?>
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
                    <?php if(isset($media_videos) || $media_display_all == 1){ ?>
                    <li>
                        <a href="javascript:void(0)" data-category="movie">
                            <i class="fa fa-fw fa-film text-danger icon-push"></i> <strong>Videos</strong>
                        </a>
                    </li>
                    <?php  } if(isset($media_images) || $media_display_all == 1){ ?>
                    <li>
                        <a href="javascript:void(0)" data-category="photo">
                            <i class="fa fa-fw fa-picture-o text-success icon-push"></i> <strong>Images</strong>
                        </a>
                    </li>
                    <?php  } if(isset($media_audio) || $media_display_all == 1){ ?>
                    <li>
                        <a href="javascript:void(0)" data-category="music">
                            <i class="fa fa-fw fa-music text-info icon-push"></i> <strong>Audio</strong>
                        </a>
                    </li>
                    <?php  } if(isset($media_documents) || $media_display_all == 1){ ?>
                    <li>
                        <a href="javascript:void(0)" data-category="book">
                            <i class="fa fa-fw fa-book text-warning icon-push"></i> <strong>Documents</strong>
                        </a>
                    </li>
                    <?php  } 
                    ?>
                </ul>
                <!-- END Filter by Type links -->
            </div>
            <!-- END Navigation Block -->
<?php
}

?>
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
                    
<?php 
$media_path = "userwebsites/web/$uniqueDomainID/uploads";
$media_dir_scan = scandir($media_path); 

//Take the string after the period '.', and then search for it in the directory, if it ends up being true. Then Print it out to the file list.

foreach($media_dir_scan as $media_dir_files){
    //Get file extension string
    $media_file_extension = strrchr($media_dir_files, ".");
    
    //check if extension is allowed from the array specified above
    if(in_array_r($media_file_extension, $types_of_media_file_extensions)){
        
        //get media type
       $media_type = get_media_type($media_file_extension, $types_of_media_file_extensions);
        
        $fileID = DB::table('media')->where('meta_value', "$media_dir_files")->pluck('media_id');
        $fileTitle = Media::get(Auth::user()->id, $fileID, 'name', true);
        ?>
                    
<div class="col-sm-6 col-lg-4">
    <div class="media-items animation-fadeInQuickInv" data-category="<?php echo $types_of_media_display_options[$media_type]['data-category']; ?>">
        <div class="media-items-options text-left">
            <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
        </div>
        <div class="media-items-content">
            <i class="fi <?php echo $types_of_media_display_options[$media_type]['icon-image']; ?> fa-5x <?php echo $types_of_media_display_options[$media_type]['color']; ?>"></i>
        </div>
        <h4>
                                <?php 
        if(strlen($fileTitle) > 13){
            echo substr("$fileTitle", 0, 11) . '..'; 
        }else{
        echo $fileTitle;
        } ?><br>
                                <small>ID: <?php echo $fileID  ?></small>
                            </h4>
    </div>
</div>
                    
        <?php
    }else{ 
}
}

?>
                    
                    
                    
                    
                    
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