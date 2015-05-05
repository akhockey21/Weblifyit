<?php
//if homepage or contact us, ignore the layout rules. If not, follow them.
if($fpage==1){
?>
        <section id="slider" style="background: url(images/landing/landing2.jpg) center; overflow: visible;" data-height-lg="500" data-height-md="500" data-height-sm="600" data-height-xs="600" data-height-xxs="600">
            <div class="container clearfix">

                <form action="#" method="post" role="form" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
                    <div class="heading-block nobottommargin nobottomborder">
                        <h2>Signup for FREE</h2>
                        <span>Get 30 Days Unlimited Access</span>
                    </div>
                    <div class="line" style="margin: 20px 0 30px;"></div>
                    <div class="col_full">
                        <input type="text" class="form-control input-lg not-dark" value="" placeholder="Your Name*">
                    </div>
                    <div class="col_full">
                        <input type="email" class="form-control input-lg not-dark" value="" placeholder="Your Email*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Choose Password*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Confirm Password*">
                    </div>
                    <div class="col_full nobottommargin">
                        <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">START FREE TRIAL</button>
                    </div>
                </form>

            </div>
        </section>
        <!-- Content
        ============================================= -->
        <section id="content" style="overflow: visible;">

            <div class="content-wrap">

                <div class="promo promo-dark promo-full landing-promo header-stick">
                    <div class="container clearfix">
                        <h3>Beautiful Landing Page designs waiting for you inside <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
                        <span>You'll love our beautiful &amp; interactive builder that makes your build process easier &amp; fun.</span>
                    </div>
                </div>
<?php
    //contact page
}elseif($fpage==2){
    ?>
        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Contact</h1>
                <span>Get in Touch with Us</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
        <!-- Google Map
        ============================================= -->
        <section id="google-map" class="gmap slider-parallax"></section>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/jquery.gmap.js"></script>

        <script type="text/javascript">

            $('#google-map').gMap({

                address: '<?php echo "$bizSt $bizCity $bizState, $bizZip" ?>',
                maptype: 'ROADMAP',
                zoom: 14,
                markers: [
                    {
                        address: "<?php echo "$bizSt $bizCity $bizState, $bizZip" ?>",
                        html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [32,39]
                        }
                    }
                ],
                doubleclickzoom: false,
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }

            });

        </script><!-- Google Map End -->


<?php
}elseif($style=="tallheader"){
    ?>
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-parallax" style="background-image: url('images/parallax/9.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

            <div class="container clearfix">
                <h1 data-animate="fadeInUp">Page Title Parallax</h1>
                <span data-animate="fadeInUp" data-delay="300">A Short Page Title Tagline</span>
            </div>

        </section><!-- #page-title end -->
<?php
}elseif($style=="shortheader"){
    ?>
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-center">

            <div class="container clearfix">
                <h1>Page Title Center</h1>
                <span>A Short Page Title Tagline</span>
            </div>

        </section><!-- #page-title end -->

<?php
}elseif($style=="noheader"){
    continue;
}elseif($style=="landingpage"){
?>
        <section id="slider" style="background: url(images/landing/landing2.jpg) center; overflow: visible;" data-height-lg="500" data-height-md="500" data-height-sm="600" data-height-xs="600" data-height-xxs="600">
            <div class="container clearfix">

                <form action="#" method="post" role="form" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
                    <div class="heading-block nobottommargin nobottomborder">
                        <h2>Signup for FREE</h2>
                        <span>Get 30 Days Unlimited Access</span>
                    </div>
                    <div class="line" style="margin: 20px 0 30px;"></div>
                    <div class="col_full">
                        <input type="text" class="form-control input-lg not-dark" value="" placeholder="Your Name*">
                    </div>
                    <div class="col_full">
                        <input type="email" class="form-control input-lg not-dark" value="" placeholder="Your Email*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Choose Password*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Confirm Password*">
                    </div>
                    <div class="col_full nobottommargin">
                        <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">START FREE TRIAL</button>
                    </div>
                </form>

            </div>
        </section>


<?php
}elseif($style=="titlepage"){
    ?>
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-center">

            <div class="container clearfix">
                <h1>Page Title Center</h1>
                <span>A Short Page Title Tagline</span>
            </div>

        </section><!-- #page-title end -->

<?php
}else{
        ?>
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-center">

            <div class="container clearfix">
                <h1>Style Not Found</h1>
                <span>Style Not FOund</span>
            </div>

        </section><!-- #page-title end -->

<?php
}
?>

