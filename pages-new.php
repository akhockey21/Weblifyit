<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <form action="" method="post" class="form-horizontal" onsubmit="return false;">
    <div class="row">
        <div class="col-lg-8">
                <!-- General Data Title -->
                <!-- END General Data Title -->

                <!-- General Data Content -->
                
                    <div class="form-group">
                        <div class="col-md-12 pull-right">
                            <h3>Add a New Page</h3>
                            <input type="text" id="page-title" name="title" class="form-control input-lg" placeholder="Enter title here">
                            <p style="padding-left: 20px;margin-top: 10px;margin-bottom: 0px;">Link to Page: <strong>www.example.com/link-to-post/</strong>  <button type="button" class="btn btn-xs btn-default">Edit</button><button type="button" class="btn btn-xs btn-default">View Page</button></p>
                        </div>
                    </div>
    <div class="btn-group">
        <button class="btn btn-primary"><i class="gi gi-flash"></i></button>
        <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Backend Editor</button>
        <button class="btn btn-primary">Frontend Editor <i class="fa fa-arrow-right"></i></button>
    </div>
    <br>
<button type="button" class="btn btn-sm btn-default"><i class="gi gi-camera"></i> Insert Media</button>
                    <div class="form-group">
                        <div class="col-md-12">
                            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
                            <!-- More info can be found at http://ckeditor.com -->
                            <textarea name="body" class="ckeditor"></textarea>
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
                <p><i class="gi gi-pin"></i> Status: Pitch <a>Edit</a></p>
                <p><i class="gi gi-eye_open"></i> Visability: Public <a>Edit</a></p>
                <p><i class="gi gi-calendar"></i> Publish: Immediately <a>Edit</a></p>
                <p><i class="gi gi-vector_path_circle"></i> SEO: N/A <a>Check</a></p>
                <!-- END Meta Data Title -->

                <!-- Meta Data Content -->
                <form action="page_ecom_product_edit.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
            <button type="button" class="btn btn-sm btn-info">Save</button>
            <button type="submit" class="btn btn-sm btn-warning">Preview</button>
            <button type="reset" class="btn btn-sm btn-primary">Publish</button>
                        </div>
                    </div>
                </form>
                <!-- END Meta Data Content -->
            </div>
            <!-- Meta Data Block -->
            <div class="block">
                <!-- Meta Data Title -->
                <div class="block-title">
                    <h2><strong>SEO</strong> Page Settings</h2>
                </div>
                <!-- END Meta Data Title -->

                <!-- Meta Data Content -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="eta-title">Meta Title</label>
                        <div class="col-md-9">
                            <input type="text" id="meta-title" name="meta_title" class="form-control" placeholder="Enter meta title..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="meta-description">Meta Description</label>
                        <div class="col-md-9">
                            <textarea id="meta-description" name="meta_description" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
                            <div class="help-block">157 Characters Max</div>
                        </div>
                    </div>
                <!-- END Meta Data Content -->
            </div>
            <!-- END Meta Data Block -->

            <!-- Product Images Block -->
            <div class="block">
                <!-- Product Images Title -->
                <div class="block-title">
                    <h2><i class="fa fa-picture-o"></i> <strong>Product</strong> Images</h2>
                </div>
                <!-- END Product Images Title -->

                <!-- Product Images Content -->
                <div class="block-section">
                    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                    <form action="page_ecom_product_edit.php" class="dropzone"></form>
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
                                    <input type="checkbox" checked><span></span>
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
                                    <input type="checkbox"><span></span>
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
                                    <input type="checkbox"><span></span>
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
        </form>
</div>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/helpers/ckeditor/ckeditor.js"></script>
<?php include 'inc/template_end.php'; ?>