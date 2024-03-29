<?php
/**
 * Choose Domain Page, Step 2 Of the Customers Checkout Flow
 */ 
?>
<?php
/**
 * Initial Start For THe Users Checkout Journey
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
        <div class="col-md-9">
            <div class="block">
<div class="step ui-formwizard-content" style="display: block;">
            <h2 class="text-center"><strong>Choose Plan > Choose Domain ></strong><span style="color:gray;"> Billing Info > Complete!</span></h2>
            <div class="progress progress-striped active">
                <div id="progress-bar-wizard" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                </div>
            </div>
                </div>
            <hr>
                <?php if($DomainSearch == null){?>
                <div id="domainSearch">
            <h3 class="text-center">Your Awesome Domain Name Is Waiting...</h3>
                    <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Enter a Domain Name" name="domainSearch">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg" id="domainsearchBTN" name="submit">Search Domains</button>
                </div>
            </div></form></div><?php }elseif($DomainSearch == true){ ?>
                <div class="row">
                    <div class="col-md-12">
                        <h5></h5>
            <div id="domain-available">
                <h3 class="text-center">Awesome! Your Domain Is Available!</h3>
                <p class="clearfix"><i class="fa fa-clock-o fa-5x text-success pull-left animation-pulse"></i>Sign up today and receive <span class="text-success"><strong>30% discount</strong></span> on all plans! Our web application will save you time and enable you to work faster and more efficiently.</p>
                <p>
                    <a href="?p=paymentinfo&plan=2" class="btn btn-lg btn-success btn-block">Get Started Now</a>
                </p>
            </div>
                    </div>
                </div>
            <?php }elseif($DomainSearch == false){?>
                <div id="domainSearch">
            <h3 class="text-center text-danger">Sorry that domain is unavailable. Please try again.</h3>
                    <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Enter a Domain Name" name="domainSearch">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg" id="domainsearchBTN" name="submit">Search Domains</button>
                </div>
            </div></form></div>
 <?php } ?>
                
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
                            </tbody>
                        </table>
                    </div>
                    <h3>Coupon Code:</h3>
                    <?php
                if(!isset($couponResponse['ifvalid'])){
                    ?>
                    <form id="coupon" action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control input-lg" name="couponCode">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Submit</button>
                </div>
            </div>
                    </form>
                    <?php
                }elseif($couponResponse['ifvalid'] == true){
                    echo '<div id="coupon-success" class="animation-fadeInQuick"><h3><i class="fa fa-check text-success"></i> Sucess!</h3><p><strong>Coupon is: </strong>' . $couponResponse['coupon'] . '</p></div>';
                }else{ ?>
                    <h5 class="text-danger">Sorry, coupon invalid.</h5>
                    <form id="coupon" action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control input-lg" name="couponCode">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Submit</button>
                </div>
            </div>
                    </form>
                    <?php
                }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>