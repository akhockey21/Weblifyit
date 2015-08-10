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
    <ul class="breadcrumb breadcrumb-top">
<li>Blog</li>
<li><a href="">Blog Settings</a></li>
</ul>
    <div class="row">
    <div class="col-md-4">
            <a href="page_ready_article.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-default animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Create New <strong>Category</strong><br>
<small>Create a New Blog Category</small>
</h3>
                </div>
            </a>
        </div>
    <div class="col-md-4">
            <a href="page_ready_article.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-default animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Manage <strong>Categories</strong><br>
<small>Manage your blog categories</small>
</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
    <div class="col-md-8">
    <div class="block full">
        <div class="block-title">
            <h2>Blog Settings</h2>
        </div>
        <div class="row">
            <div class="col-md-10">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Posts per page</h4>
                                    <p>Number of posts per page.</p>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="posts_per_page" name="posts_per_page" value="<?php echo BlogSettings::get($user, 'posts_per_page', true); ?>" placeholder="Posts Per Page">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Blog Layout</h4>
                                    <p>Layout for Blog Page.</p>
                                </label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="blog_layout" value="classic">Classic
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="blog_layout" value="masonry">Masonry
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="blog_layout" value="timeline">Timeline
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-file-input">
                                    <h4>Excerpt Length</h4>
                                    <p>Number of words on blog teasers.</p>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="excerpt_length" name="excerpt_length" value="<?php echo BlogSettings::get($user, 'excerpt_length', true); ?>" placeholder="Excerpt Length">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Show Post Title</h4>
                                    <p>Show the blog post title on the blog page.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="show_post_title"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Post Meta</h4>
                                    <p>Show Author, Date & Categories.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="post_meta"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Author Box</h4>
                                    <p>Show Author Box.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="show_author_box"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Related Posts</h4>
                                    <p>Show Related Posts.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="show_related_posts"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    <h4>Blog Post Comments</h4>
                                    <p>Show Blog Post Comments.</p>
                                </label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" checked="" name="show_comments"><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fa fa-angle-right"></i> Submit</button>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
        </div>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formWizardWeblifyit.js"></script> 
<script>$(function(){ FormsWizard.init(); });</script>

<?php include 'inc/template_end.php'; ?>