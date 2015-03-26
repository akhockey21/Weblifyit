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

<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                    <fieldset>
                        <legend>Vital Info</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <p class="form-control-static">Admin</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                            <div class="col-md-8">
                                <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary">
                                    <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Password Update</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
<!-- END User Settings -->
<div id="leadsale" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-dollar"></i> Add Sale</h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="post"  class="form-horizontal form-bordered">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-sale-lead">Mark The Lead as a Sale</label>
                            <div class="col-md-8">
                                <input type="number" id="user-sale-lead" name="user-sale-lead" class="form-control" placeholder="Please Enter Sale Ammount..">
                                <input type="hidden" id="lead-id" name="lead-id">
                                
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" name="leadsale">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="deletelead" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h4 class="modal-title">Are You Sure You Want To Delete The Lead?</h4>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="post"  class="form-horizontal form-bordered">
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <input id="delete-lead" name="delete-lead" type="hidden">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-danger" name="deleteleadbtn">Delete Lead</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<div id="editleadsale" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h4 class="modal-title">Sales For This Lead</h4>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
        <!-- Responsive Full Title -->
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
    <td>Sale Ammount:</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <form action="" method="post">
                                <input id="getsalesfromlead" name="getsalesfromlead" type="hidden">
                                <input type="text" id="saleammount" name="saleammount">
                                </td>
                            <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <button type="submit" class="btn btn-sm btn-info" id="saleammountbtn" name="saleammountbtn">Update Sale Price</button>
                                <button type="submit" class="btn btn-sm btn-danger" id="saleammountbtnn" name="saleammountbtnn">Delete Sale</button>

                            </div> 
                            </form>
                        </td>
</tr>
                </tbody>
            </table>
        
                </div>
 
        <!-- END Responsive Full Content -->


            
                <form action="" class="form-horizontal form-bordered">
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-center">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>

<!-- END User Settings -->
<div id="addlead" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-user"></i> Add a Lead</h2>
            </div>
            <!-- END Modal Header -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="post"  class="form-horizontal form-bordered">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Name</label>
                            <div class="col-md-8">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Please Enter Lead Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-8">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Please Enter Lead email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="phone">Phone Number</label>
                            <div class="col-md-8">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Please Enter Lead Phone Number">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                            <label class="col-md-4 control-label">Send Automation?</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="lead_automation">
                                    <input type="checkbox" id="lead_automation" name="lead_automation" value="1">
                                    <span data-toggle="tooltip" title="Do You Want This Lead To Recieve The Automation Alert?"></span>
                                </label>
                            </div>
                        </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" name="addlead">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>