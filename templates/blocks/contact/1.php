<div class="container clearfix">

                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Send us an Email</h3>

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post" novalidate="novalidate">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" aria-required="true">
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" aria-required="true">
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" aria-required="true">
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Wordpress">Wordpress</option>
                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30" aria-required="true"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                        </form>

                        <script type="text/javascript">

                            $("#template-contactform").validate({
                                submitHandler: function(form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function() {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });

                        </script>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar col_last nobottommargin">

                        <address>
                            <strong>Headquarters:</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                        <div class="widget noborder notoppadding">

                            <div class="fslider testimonial twitter-scroll" data-animation="slide" data-arrows="false">
                                <div class="flexslider">
                                    
                                <div class="flex-viewport" style="overflow: hidden; position: relative; height: 105px;"><div class="slider-wrap" style="width: 1000%; transform: translate3d(-396px, 0px, 0px); transition-duration: 0.6s; -webkit-transition-duration: 0.6s; -webkit-transform: translate3d(-396px, 0px, 0px);"><div class="slide clone" aria-hidden="true" style="float: left; display: block; width: 198px;">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                                <div class="testi-meta">
                                                    <span>5 days ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide" style="float: left; display: block; width: 198px;">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Join us in watching some of the wonderful moments we've shared with our amazing Community^ Carmen <a href="http://t.co/zpH1khNemV" target="_blank">http://t.co/zpH1khNemV</a></p>
                                                <div class="testi-meta">
                                                    <span><a href="#">32 minutes ago</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide flex-active-slide" style="float: left; display: block; width: 198px;">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>@<a href="http://twitter.com/amazonastyle" target="_blank">amazonastyle</a> Yay! Glad to help in any way we can :D ^TK</p>
                                                <div class="testi-meta">
                                                    <span>4 hours ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide" style="float: left; display: block; width: 198px;">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                                <div class="testi-meta">
                                                    <span>5 days ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="slide clone" aria-hidden="true" style="float: left; display: block; width: 198px;">
                                            <div class="testi-image">
                                                <a href="#"><i class="icon-twitter2"></i></a>
                                            </div>
                                            <div class="testi-content">
                                                <p>Join us in watching some of the wonderful moments we've shared with our amazing Community^ Carmen <a href="http://t.co/zpH1khNemV" target="_blank">http://t.co/zpH1khNemV</a></p>
                                                <div class="testi-meta">
                                                    <span><a href="#">32 minutes ago</a></span>
                                                </div>
                                            </div>
                                        </div></div></div><ol class="flex-control-nav flex-control-paging"><li data-animate="zoomIn" data-delay="0" class="zoomIn animated"><a class="">1</a></li><li data-animate="zoomIn" data-delay="200" class="zoomIn animated"><a class="flex-active">2</a></li><li data-animate="zoomIn" data-delay="400" class="zoomIn animated"><a class="">3</a></li></ol></div>
                            </div>

                        </div>

                        <div class="widget noborder notoppadding">

                            <a href="#" class="social-icon si-small si-dark si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-dribbble">
                                <i class="icon-dribbble"></i>
                                <i class="icon-dribbble"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-forrst">
                                <i class="icon-forrst"></i>
                                <i class="icon-forrst"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                        </div>

                    </div><!-- .sidebar end -->

                </div>