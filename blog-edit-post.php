<?php
require_once 'app/init.php';
if (!Auth::check())
    redirect_to(App::url());
/** 
 * 
 * This is the edit blog page, the blog page id is retrieved through URL with 'blogpost_id'
 * 
 */
use Hazzard\Support\MessageBag;
$userID = Auth::user()->id;

if (isset($_GET['blogpostid']) && csrf_filter()) {
    if (isset($_GET['blogpostid'])) {
        $blogPostID = $_GET['blogpostid'];
    }
    else{
        redirect_to(App::url());
    }
}

$post_link = BlogContent::get($userID, $blogPostID, 'link', true);
$post_title = BlogContent::get($userID, $blogPostID, 'title', true);
$post_status = BlogContent::get($userID, $blogPostID, 'status', true);
$post_visability = BlogContent::get($userID, $blogPostID, 'visability', true);
$post_publish = BlogContent::get($userID, $blogPostID, 'publish_date', true);
$post_seo_checked = BlogContent::get($userID, $blogPostID, 'seo_checked', true);
$post_seo_status = BlogContent::get($userID, $blogPostID, 'seo_status', true);
$post_seo_title = BlogContent::get($userID, $blogPostID, 'seo_title', true);
$post_seo_description = BlogContent::get($userID, $blogPostID, 'seo_description', true);
$post_images = BlogContent::get($userID, $blogPostID, 'images', true);
$post_images_featured = BlogContent::get($userID, $blogPostID, 'images_featured', true);
$post_body = BlogContent::get($userID, $blogPostID, 'body', true);
$post_category = BlogContent::get($userID, $blogPostID, 'category', true);

include 'inc/builder/config.php';

include 'inc/builder/template_start.php';

include 'inc/builder/page_head.php';
?>

<!-- blog content -->
<div id="page-content">
    <div class="row">
        <div class="col-lg-8">
                <!-- General Data Title -->
                <!-- END General Data Title -->

                <!-- General Data Content -->
                
                    <div class="form-group">
                        <div class="col-md-12 pull-right">
                            <h3>Add a New Blog Post</h3>
                            <input form="main" type="text" id="blog-title" name="title" class="form-control input-lg" placeholder="Enter title here" value="<?php if(!isset($post_title)) echo $post_title; ?>">
                            <p style="padding-left: 20px;margin-top: 10px;margin-bottom: 0px;">Link to blog post: <strong><?php if(!isset($post_link)) echo $post_link; ?></strong>  <button type="button" class="btn btn-xs btn-default">Edit</button><button type="button" class="btn btn-xs btn-default">View blog</button></p>
                        </div>
                    </div>
                        <div class="col-md-12">
    <div class="btn-group">
        <button class="btn btn-primary"><i class="gi gi-flash"></i></button>
        <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Backend Editor</button>
        <button class="btn btn-primary">Frontend Editor <i class="fa fa-arrow-right"></i></button>
    </div>
    <br>
    <br>
<button type="button" class="btn btn-sm btn-default"><i class="gi gi-camera"></i> Insert Media</button>
                    <div class="form-group">
                            <textarea form="main" name="body" id="body" class="ckeditor"></textarea>
                        </div>
                    </div>
                
                <!-- END General Data Content -->
            </div>
        <div class="col-lg-4 pull-right">
            <!-- Meta Data Block -->
            <div class="block">
                <!-- Meta Data Title -->
                <div class="block-title">
                    <h2>Publish</h2>
                </div>
                <p><i class="gi gi-pin"></i> Status: <?php if(!isset($post_status)){ echo $post_status;}else{ echo "Draft";} ?> <a>Edit</a></p>
                <p><i class="gi gi-eye_open"></i> Visability: <?php if(!isset($post_visability)){ echo $post_visability;}else{ echo "Not Published";} ?> <a>Edit</a></p>
                <p><i class="gi gi-calendar"></i> Publish: <?php if(!isset($post_publish)){ echo $post_publish;}else{ echo "Publish Immediately";} ?> <a>Edit</a></p>
                <p><i class="gi gi-vector_path_circle"></i> SEO: <?php if(!isset($post_seo_status)){ echo $post_seo_status;}else{ echo "Draft";} ?> <a>Check</a></p><p><i class="gi gi-vector_path_circle"></i> Category: <?php if(!isset($post_category)){ echo $post_category;}else{ echo "Default";} ?> <a>Edit</a></p>
                <!-- END Meta Data Title -->

                <!-- Meta Data Content -->
                <form action="" method="post" class="form-horizontal form-bordered" id="main">
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
            <button type="button" class="btn btn-sm btn-info">Save</button>
            <button type="button" class="btn btn-sm btn-warning">Preview</button>
            <button type="submit" class="btn btn-sm btn-primary" name="addnew">Publish</button>
                        </div>
                    </div>
                </form>
                <!-- END Meta Data Content -->
            </div>
            <!-- Meta Data Block -->
            <div class="block">
                <!-- Meta Data Title -->
                <div class="block-title">
                    <h2><strong>SEO</strong> blog Settings</h2>
                </div>
                <!-- END Meta Data Title -->
<div class="row">
<div class="col-md-12">
    
                <!-- Meta Data Content -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="eta-title">Meta Title</label>
                        <div class="col-md-9">
                            <input form="main" type="text" id="meta-title" name="meta_title" class="form-control" placeholder="Enter meta title.." value="<?php if(!isset($post_seo_title)) echo $post_seo_title; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="meta-description">Meta Description</label>
                        <div class="col-md-9">
                            <textarea id="meta-description" name="meta_description" class="form-control" rows="6" placeholder="Enter meta description.." value="<?php if(!isset($post_seo_description)) echo $post_seo_description; ?>"></textarea>
                            <div class="help-block">157 Characters Max Reccomended</div>
                        </div>
                    </div>
                <!-- END Meta Data Content -->
            <!-- END Meta Data Block -->    </div>                
</div>
            </div> 
            <!-- Product Images Block -->
            <div class="block">
                <!-- Product Images Title -->
                <div class="block-title">
                    <h2><i class="fa fa-picture-o"></i> <strong>Featured</strong> Images</h2>
                </div>
                <!-- END Product Images Title -->

                <!-- Product Images Content -->
                <div class="block-section">
                    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                    <form action="blog_ecom_product_edit.php" class="dropzone"></form>
                </div>
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td style="width: 20%;">
                                <a href="img/placeholders/photos/photo11.jpg" data-toggle="lightbox-image">
                                    <img src="img/placeholders/photos/photo11.jpg" alt="" class="img-responsive center-block" style="max-width: 110px;">
                                </a>
                            </td>
                            <td class="text-center">
                                <label class="switch switch-primary">
                                    <input form="main" type="checkbox" checked><span></span>
                                </label>
                                Cover
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="img/placeholders/photos/photo13.jpg" data-toggle="lightbox-image">
                                    <img src="img/placeholders/photos/photo13.jpg" alt="" class="img-responsive center-block" style="max-width: 110px;">
                                </a>
                            </td>
                            <td class="text-center">
                                <label class="switch switch-primary">
                                    <input form="main" type="checkbox"><span></span>
                                </label>
                                Cover
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="img/placeholders/photos/photo9.jpg" data-toggle="lightbox-image">
                                    <img src="img/placeholders/photos/photo9.jpg" alt="" class="img-responsive center-block" style="max-width: 110px;">
                                </a>
                            </td>
                            <td class="text-center">
                                <label class="switch switch-primary">
                                    <input form="main" type="checkbox"><span></span>
                                </label>
                                Cover
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Product Images Content -->
            </div>
            <!-- END Product Images Block -->
        </div>
    </div>
    <!-- END Product Edit Content -->
</div>
<!-- END blog Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- ckeditor.js, load it only in the blog you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/helpers/ckeditor/ckeditor.js"></script>
<?php include 'inc/template_end.php'; ?>