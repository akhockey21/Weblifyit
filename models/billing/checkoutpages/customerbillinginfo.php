<?php
/**
 * Step 3: Customers INFO and BILLING info.
 */

?>
<div id="page-content">
    <div class="content-header">
        <div class="header-section">
            <h1>
<i class="gi gi-usd"></i>Choose Your Plan Today!<br><small>Professional design to attract your customers!</small>
</h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Website Settings</li>
        <li><a href="">Choose a Plan</a>
        </li>
    </ul>

    <div class="row" id="Domainprices">
        <div class="col-md-8">
            <div class="block">
<div class="step ui-formwizard-content" style="display: block;">
            <h2 class="text-center"><strong>Choose Plan > Choose Domain > Billing Info ></strong><span style="color:gray;"> Complete!</span></h2>
            <div class="progress progress-striped active">
                <div id="progress-bar-wizard" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                </div>
            </div>
            </div>
            <hr>
            <form id="advanced-wizard" action="" method="post" class="form-horizontal form-bordered ui-formwizard" novalidate="novalidate">
                <div id="advanced-first" class="step ui-formwizard-content" style="display: block;">
                    <div class="wizard-steps">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-6">
                            <div class="col-md-2 active">
                                <span>Billing Info</span>
                            </div>
                            </div></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fullName">Full Name <span class="">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="fullName" name="fullName" class="form-control ui-wizard-content" placeholder="Your Full Name.." required="" aria-required="true" aria-describedby="fullName-error" aria-invalid="true">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                            <span id="fullName-error" class="help-block animation-slideDown">Please enter a Full Name</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="billing_zip">Billing Zipcode <span class="">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="billing_zip" name="billing_zip" class="form-control ui-wizard-content" placeholder="Billing Zip Code" required="" aria-required="true" aria-describedby="billing_zip-error">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="billing_zip-error" class="help-block animation-slideDown">Please enter a valid zip code</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cc_num">Credit Card Number <span class="">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="cc_num" name="cc_num" class="form-control ui-wizard-content" placeholder="0000-0000-0000-0000" required="" aria-required="true" aria-describedby="cc_num-error">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <span id="cc_num-error" class="help-block animation-slideDown">Please provide a valid Credit Card Number</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <div class="input-group">
                                <input type="text" id="cc_exp" name="cc_exp" class="form-control ui-wizard-content" placeholder="00/00" required="" aria-required="true" aria-describedby="cc_exp-error">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <span id="cc_exp-error" class="help-block animation-slideDown">Invalid Expiration Date</span>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" id="cc_sid" name="cc_sid" class="form-control ui-wizard-content" placeholder="123" required="" aria-required="true" aria-describedby="cc_sid-error">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <span id="cc_sid-error" class="help-block animation-slideDown">Invalid Security Code</span>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" id="cc_type" name="cc_type" class="form-control ui-wizard-content" placeholder="Visa" aria-required="true" aria-describedby="cc_type-error" disabled>
                                <span class="input-group-addon"><i class="fa fa-cc-visa"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-4">
                        <label class="col-md-5 control-label">Check to Aggree to the Terms/Conditions</label>
<input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1" style="margin-right: 15px;">
                        <input type="submit" class="btn btn-sm btn-success" value="Submit Payment">
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div class="col-md-3">

            <div class="block">
                <div class="block-section">
                    <h3 class="text-center">Selected Plan:</h3>
                    <div class="table-responsive">
                        <table class="table table-borderless table-pricing">
                            <thead>
                                <tr>
                                    <th class="table-featured"><i class="fa fa-cloud-download"></i> Business</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-featured"><strong>Free</strong> Domain</td>
                                </tr>
                                <tr>
                                    <td class="table-featured">Online Store</td>
                                </tr>
                                <tr>
                                    <td class="table-featured">Lead Alerts</td>
                                </tr>
                                <tr>
                                    <td class="table-featured">Website Stats</td>
                                </tr>
                                <tr>
                                    <td class="table-featured">*</td>
                                </tr>
                                <tr>
                                    <td class="table-featured table-price">
                                        <h1>$15<br><small>per month</small></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-featured">www.domain.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Coupon Code:</h3>
            <div class="input-group">
                <input type="text" class="form-control input-lg">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Submit</button>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

