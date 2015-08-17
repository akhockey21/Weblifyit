<?php
/**
 * This page is the verifcation of payment and completion. Also Initiates godaddy API
 */ 

?>

<?php
/**
 * Step 3: Customers INFO and domain info.
 */

?>
<div id="page-content">
    <div class="content-header">
        <div class="header-section">
            <h1>
<i class="gi gi-usd"></i>Congratulations on your new website!<br><small>We just need a little bit more information..</small>
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
            <h2 class="text-center"><strong>Choose Plan > Choose Domain > domain Info > Complete!</strong></h2>
            <div class="progress progress-striped active">
                <div id="progress-bar-wizard" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                </div>
            </div>
            </div>
            <hr>
                                <h1 class="text-center">We just need a little bit more information.<br><small>Domain Registrant Information</small></h1>
                
                
            <form id="advanced-wizard" action="" method="post" class="form-horizontal form-bordered ui-formwizard" novalidate="novalidate">
                <div id="advanced-first" class="step ui-formwizard-content" style="display: block;">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firstName">Domain Registrant Name <span class="">*</span>
                        </label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" id="firstName" name="firstName" class="form-control ui-wizard-content" placeholder="Your First Name.." required="" aria-required="true" aria-describedby="firstName-error" aria-invalid="true">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                            <span id="firstName-error" class="help-block animation-slideDown">Please enter Your First Name</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" id="lastName" name="lastName" class="form-control ui-wizard-content" placeholder="Your Last Name.." required="" aria-required="true" aria-describedby="lastName-error" aria-invalid="true">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            </div>
                            <span id="lastName-error" class="help-block animation-slideDown">Please enter your Last Name</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="domain_street">Domain Registrant Address <span class="">*</span>
                        </label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" id="domain_street" name="domain_street" class="form-control ui-wizard-content" placeholder="domain street Code" required="" aria-required="true" aria-describedby="domain_street-error">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="domain_street-error" class="help-block animation-slideDown">Please enter a valid street code</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" id="domain_zip" name="domain_zip" class="form-control ui-wizard-content" placeholder="domain Zip Code" required="" aria-required="true" aria-describedby="domain_zip-error">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="domain_zip-error" class="help-block animation-slideDown">Please enter a valid zip code</span>
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <div class="input-group">
                                <input type="text" id="domain_city" name="domain_city" class="form-control ui-wizard-content" placeholder="domain city Code" required="" aria-required="true" aria-describedby="domain_city-error">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="domain_city-error" class="help-block animation-slideDown">Please enter a valid city code</span>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="text" id="domain_state" name="domain_state" class="form-control ui-wizard-content" placeholder="domain state Code" required="" aria-required="true" aria-describedby="domain_state-error"> 
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="domain_state-error" class="help-block animation-slideDown">Please enter a valid state code</span>
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <div class="input-group">
                                <input type="text" id="domain_country" name="domain_country" class="form-control ui-wizard-content" placeholder="domain country Code" required="" aria-required="true" aria-describedby="domain_country-error">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <span id="domain_country-error" class="help-block animation-slideDown">Please enter a valid country code</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="domain_phone">Domain Registrant Phone Number <span class="">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="domain_phone" name="domain_phone" class="form-control ui-wizard-content" placeholder="0000-0000-0000-0000" required="" aria-required="true" aria-describedby="domain_phone-error">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <span id="domain_phone-error" class="help-block animation-slideDown">Please provide a valid Credit Card Number</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="domain_email">Domain Registrant Email <span class="">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="domain_email" name="domain_email" class="form-control ui-wizard-content" placeholder="0000-0000-0000-0000" required="" aria-required="true" aria-describedby="domain_email-error">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <span id="domain_email-error" class="help-block animation-slideDown">Please provide a valid Credit Card Number</span>
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-4">
                        <label class="col-md-5 control-label">Check to Aggree to the Terms/Conditions</label>
<input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1" style="margin-right: 15px;">
                        <input type="submit" class="btn btn-sm btn-success" value="Register Your Domain!">
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
                </div>
            </div>
        </div>
            </div>
        </div>



