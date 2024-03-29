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
    <!-- eCommerce Customer Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
            </li>
            <li>
                <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
            </li>
            <li>
                <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="page_ecom_product_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
            </li>
            <li class="active">
                <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
            </li>
        </ul>
    </div>
    <!-- END eCommerce Customer Header -->

    <!-- Customer Content -->
    <div class="row">
        <div class="col-lg-4">
            <!-- Customer Info Block -->
            <div class="block">
                <!-- Customer Info Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                <!-- END Customer Info Title -->

                <!-- Customer Info -->
                <div class="block-section text-center">
                    <a href="javascript:void(0)">
                        <img src="img/placeholders/avatars/avatar4@2x.jpg" alt="avatar" class="img-circle">
                    </a>
                    <h3>
                        <strong>Jonathan Taylor</strong><br><small></small>
                    </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Social Title</strong></td>
                            <td>Mr.</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Birthdate</strong></td>
                            <td>November 20, 1984</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Registration</strong></td>
                            <td>15/10/2014 - 12:25</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Last Visit</strong></td>
                            <td>06/11/2014 - 09:41</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Language</strong></td>
                            <td>English (UK)</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Registrations</strong></td>
                            <td><span class="label label-primary">Newsletter</span></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Status</strong></td>
                            <td><span class="label label-success"><i class="fa fa-check"></i> Active</span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Customer Info -->
            </div>
            <!-- END Customer Info Block -->

            <!-- Quick Stats Block -->
            <div class="block">
                <!-- Quick Stats Title -->
                <div class="block-title">
                    <h2><i class="fa fa-line-chart"></i> <strong>Quick</strong> Stats</h2>
                </div>
                <!-- END Quick Stats Title -->

                <!-- Quick Stats Content -->
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background">
                            <i class="fa fa-truck"></i>
                        </div>
                        <h4 class="text-left">
                            <strong>4</strong><br><small>Orders in Total</small>
                        </h4>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background-success">
                            <i class="fa fa-usd"></i>
                        </div>
                        <h4 class="text-left text-success">
                            <strong>$ 2.125,00</strong><br><small>Orders Value</small>
                        </h4>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background-warning">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <h4 class="text-left text-warning">
                            <strong>3</strong> ($ 517,00)<br><small>Products in Cart</small>
                        </h4>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background-info">
                            <i class="fa fa-group"></i>
                        </div>
                        <h4 class="text-left text-info">
                            <strong>2</strong><br><small>Referred Members</small>
                        </h4>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background-danger">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h4 class="text-left text-danger">
                            <strong>15</strong><br><small>Favorite Products</small>
                        </h4>
                    </div>
                </a>
                <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                    <div class="widget-simple">
                        <div class="widget-icon pull-right themed-background-muted">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <h4 class="text-left text-muted">
                            <strong>2</strong><br><small>Tickets</small>
                        </h4>
                    </div>
                </a>
                <!-- END Quick Stats Content -->
            </div>
            <!-- END Quick Stats Block -->
        </div>
        <div class="col-lg-8">
            <!-- Orders Block -->
            <div class="block">
                <!-- Orders Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success"><strong>$ 2125,00</strong></span>
                    </div>
                    <h2><i class="fa fa-truck"></i> <strong>Orders</strong> (4)</h2>
                </div>
                <!-- END Orders Title -->

                <!-- Orders Content -->
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="page_ecom_order_view.php"><strong>ORD.685199</strong></a></td>
                            <td class="hidden-xs" style="width: 15%;"><a href="javascript:void(0)">5 Products</a></td>
                            <td class="text-right hidden-xs" style="width: 10%;"><strong>$585,00</strong></td>
                            <td><span class="label label-warning">Processing</span></td>
                            <td class="hidden-xs">Paypal</td>
                            <td class="hidden-xs text-center">16/11/2014</td>
                            <td class="text-center" style="width: 70px;">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.php" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685198</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">2 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$958,00</strong></td>
                            <td><span class="label label-info">For delivery</span></td>
                            <td class="hidden-xs">Credit Card</td>
                            <td class="hidden-xs text-center">03/10/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.php" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685197</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">3 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$318,00</strong></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="hidden-xs">Bank Wire</td>
                            <td class="hidden-xs text-center">17/06/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.php" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685196</strong></a></td>
                            <td class="hidden-xs"><a href="javascript:void(0)">6 Products</a></td>
                            <td class="text-right hidden-xs"><strong>$264,00</strong></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="hidden-xs">Paypal</td>
                            <td class="hidden-xs text-center">27/01/2014</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <a href="page_ecom_order_view.php" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="View"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Orders Content -->
            </div>
            <!-- END Orders Block -->

            <!-- Products in Cart Block -->
            <div class="block">
                <!-- Products in Cart Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-success"><strong>$ 517,00</strong></span>
                    </div>
                    <h2><i class="fa fa-shopping-cart"></i> <strong>Products</strong> in Cart (3)</h2>
                </div>
                <!-- END Products in Cart Title -->

                <!-- Products in Cart Content -->
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8715</strong></a></td>
                            <td class="hidden-xs" style="width: 15%;"><a href="page_ecom_product_edit.php">Product #98</a></td>
                            <td class="text-right hidden-xs" style="width: 10%;"><strong>$399,00</strong></td>
                            <td><span class="label label-success">Available (479)</span></td>
                            <td class="text-center" style="width: 70px;">
                                <a href="page_ecom_product_edit.php" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_product_edit.php"><strong>PID.8725</strong></a></td>
                            <td class="hidden-xs"><a href="page_ecom_product_edit.php">Product #98</a></td>
                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                            <td><span class="label label-success">Available (163)</span></td>
                            <td class="text-center">
                                <a href="page_ecom_product_edit.php" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="page_ecom_product_edit.php"><strong>PID.8798</strong></a></td>
                            <td class="hidden-xs"><a href="page_ecom_product_edit.php">Product #98</a></td>
                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                            <td><span class="label label-danger">Out of Stock</span></td>
                            <td class="text-center">
                                <a href="page_ecom_product_edit.php" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Products in Cart Content -->
            </div>
            <!-- END Products in Cart Block -->

            <!-- Customer Addresses Block -->
            <div class="block">
                <!-- Customer Addresses Title -->
                <div class="block-title">
                    <h2><i class="fa fa-building-o"></i> <strong>Customer</strong> Addresses (2)</h2>
                </div>
                <!-- END Customer Addresses Title -->

                <!-- Customer Addresses Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Billing Address Block -->
                        <div class="block">
                            <!-- Billing Address Title -->
                            <div class="block-title">
                                <h2>Billing Address</h2>
                            </div>
                            <!-- END Billing Address Title -->

                            <!-- Billing Address Content -->
                            <h4><strong>Jonathan Taylor</strong></h4>
                            <address>
                                Sunset Str 620<br>
                                Melbourne<br>
                                Australia, 21-842<br><br>
                                <i class="fa fa-phone"></i> (999) 852-11111<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">johnathan.taylor@example.com</a>
                            </address>
                            <!-- END Billing Address Content -->
                        </div>
                        <!-- END Billing Address Block -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Shipping Address Block -->
                        <div class="block">
                            <!-- Shipping Address Title -->
                            <div class="block-title">
                                <h2>Shipping Address</h2>
                            </div>
                            <!-- END Shipping Address Title -->

                            <!-- Shipping Address Content -->
                            <h4><strong>Harry Burke</strong></h4>
                            <address>
                                Sunset Str 598<br>
                                Melbourne<br>
                                Australia, 21-852<br><br>
                                <i class="fa fa-phone"></i> (999) 852-22222<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">harry.burke@example.com</a>
                            </address>
                            <!-- END Shipping Address Content -->
                        </div>
                        <!-- END Shipping Address Block -->
                    </div>
                </div>
                <!-- END Customer Addresses Content -->
            </div>
            <!-- END Customer Addresses Block -->

            <!-- Referred Members Block -->
            <div class="block">
                <!-- Referred Members Title -->
                <div class="block-title">
                    <h2><i class="fa fa-group"></i> <strong>Referred</strong> Members (2)</h2>
                </div>
                <!-- END Referred Members Title -->

                <!-- Referred Members Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                            <div class="widget-simple">
                                <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="widget-image img-circle pull-left">
                                <h4 class="widget-content text-right">
                                    <strong>Julia Warren</strong>
                                    <small>Orders Value: <strong>$280,00</strong></small>
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="javascript:void(0)" class="widget widget-hover-effect2 themed-background-muted-light">
                            <div class="widget-simple">
                                <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="widget-image img-circle pull-left">
                                <h4 class="widget-content text-right">
                                    <strong>Kyle Ross</strong>
                                    <small>Orders Value: <strong>$780,00</strong></small>
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Referred Members Content -->
            </div>
            <!-- END Referred Members Block -->

            <!-- Private Notes Block -->
            <div class="block full">
                <!-- Private Notes Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-text-o"></i> <strong>Private</strong> Notes</h2>
                </div>
                <!-- END Private Notes Title -->

                <!-- Private Notes Content -->
                <div class="alert alert-info">
                    <i class="fa fa-fw fa-info-circle"></i> This note will be displayed to all employees but not to customers.
                </div>
                <form action="page_ecom_customer_view.php" method="post" onsubmit="return false;">
                    <textarea id="private-note" name="private-note" class="form-control" rows="4" placeholder="Your note.."></textarea>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Note</button>
                </form>
                <!-- END Private Notes Content -->
            </div>
            <!-- END Private Notes Block -->
        </div>
    </div>
    <!-- END Customer Content -->
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
