<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());
/** 
* 
* This page is the dashboard for the entire web application.
* 
*/ 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);
?>
<?php include 'inc/builder/config.php'; ?>
<?php include 'inc/builder/template_start.php'; ?>
<?php include 'inc/builder/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <ul class="breadcrumb breadcrumb-top">
<li>Blog</li>
<li><a href="">Manage Posts</a></li>
</ul>
    <div class="row">
    <div class="col-md-4">
            <a href="page_ready_article.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-default animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
Create New <strong>Article</strong><br>
<small>Setup Blog</small>
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
Edit Your Blog's <strong>Settings</strong><br>
<small>Change Design and Blog Settings</small>
</h3>
                </div>
            </a>
        </div></div>
    <div class="row">
    <div class="col-md-8">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>SEO</th>
                        <th class="text-center">Date</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class'] = "label-success";
                    $labels['0']['text'] = "VIP";
                    $labels['1']['class'] = "label-info";
                    $labels['1']['text'] = "Business";
                    $labels['2']['class'] = "label-primary";
                    $labels['2']['text'] = "Personal";
                    $labels['3']['class'] = "label-warning";
                    $labels['3']['text'] = "Trial";
                    ?>
                    <?php for($i=1; $i<61; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td><a href="javascript:void(0)">Title<?php echo $i; ?></a></td>
                        <td>Published</td>
                        <td>Green Circle</td>
                        <td>Date</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit Page</a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete Page</a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php include 'inc/footer_website.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>


<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>