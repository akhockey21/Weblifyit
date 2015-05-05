<div class="container clearfix">

                    <!-- Contact Form
                    ============================================= -->
                    <div class="col_half">

                        <div class="fancy-title title-dotted-border">
                            <h3>Send us an Email</h3>
                        </div>

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
                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
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

                    </div><!-- Contact Form End -->

                    <!-- Google Map
                    ============================================= -->
                    <div class="col_half col_last">

                        <section id="google-map" class="gmap" style="height: 410px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(file://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: 77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: 77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: -179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: 333px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: 77px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: -179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: 333px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: -179px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: 333px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 161px; top: 77px;"><canvas draggable="false" height="320" width="320" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -95px; top: 77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 161px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 161px; top: 333px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 417px; top: 77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -95px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -95px; top: 333px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 417px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 417px; top: 333px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 547px; height: 410px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i7571646&amp;2i5146982&amp;2e1&amp;3u14&amp;4m3&amp;1u1094&amp;2u820&amp;3e2&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=17561" style="width: 547px; height: 410px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: 77px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14789!3i10053!2m3!1e0!2sm!3i295179532!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: 77px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14788!3i10053!2m3!1e0!2sm!3i295194651!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: -179px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14789!3i10052!2m3!1e0!2sm!3i295179532!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 161px; top: 333px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14789!3i10054!2m3!1e0!2sm!3i295187449!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: 77px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14790!3i10053!2m3!1e0!2sm!3i295179532!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: -179px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14788!3i10052!2m3!1e0!2sm!3i295194651!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -95px; top: 333px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14788!3i10054!2m3!1e0!2sm!3i295187449!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: -179px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14790!3i10052!2m3!1e0!2sm!3i295179532!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 417px; top: 333px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i14!2i14790!3i10054!2m3!1e0!2sm!3i295187449!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; transform: translateZ(0px) translateZ(0px);"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=-37.814107,144.96328&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2015 Google</span></div></div></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 124px; top: 115px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2015 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@-37.814107,144.96328,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="78" controlheight="311" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="cursor: url(file://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div style="visibility: hidden;"><svg version="1.1" overflow="hidden" width="78px" height="78px" viewBox="0 0 78 78" style="position: absolute; left: 0px; top: 0px;"><circle cx="39" cy="39" r="35" stroke-width="3" fill-opacity="0.2" fill="#f2f4f6" stroke="#f2f4f6"></circle><g transform="rotate(0 39 39)"><rect x="33" y="0" rx="4" ry="4" width="12" height="11" stroke="#a6a6a6" stroke-width="1" fill="#f2f4f6"></rect><polyline points="36.5,8.5 36.5,2.5 41.5,8.5 41.5,2.5" stroke-linejoin="bevel" stroke-width="1.5" fill="#f2f4f6" stroke="#000"></polyline></g></svg></div></div><div class="gmnoprint" controlwidth="59" controlheight="59" style="position: absolute; left: 10px; top: 11px;"><div style="width: 59px; height: 59px; overflow: hidden; position: relative;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"><div title="Pan left" style="position: absolute; left: 0px; top: 20px; width: 19.6666666666667px; height: 19.6666666666667px; cursor: pointer;"></div><div title="Pan right" style="position: absolute; left: 39px; top: 20px; width: 19.6666666666667px; height: 19.6666666666667px; cursor: pointer;"></div><div title="Pan up" style="position: absolute; left: 20px; top: 0px; width: 19.6666666666667px; height: 19.6666666666667px; cursor: pointer;"></div><div title="Pan down" style="position: absolute; left: 20px; top: 39px; width: 19.6666666666667px; height: 19.6666666666667px; cursor: pointer;"></div></div></div></div><div class="gmnoprint" controlwidth="25" controlheight="226" style="position: absolute; left: 27px; top: 85px;"><div title="Zoom in" style="width: 23px; height: 24px; overflow: hidden; position: relative; cursor: pointer; z-index: 1;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png" draggable="false" style="position: absolute; left: -17px; top: -400px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Click to zoom" style="width: 25px; height: 178px; overflow: hidden; position: relative; cursor: pointer; top: -4px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png" draggable="false" style="position: absolute; left: -17px; top: -87px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Drag to zoom" style="width: 21px; height: 14px; overflow: hidden; position: absolute; -webkit-transition: top 0.25s ease; transition: top 0.25s ease; z-index: 2; cursor: url(file://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; left: 2px; top: 76px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: -384px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom out" style="width: 23px; height: 23px; overflow: hidden; position: relative; cursor: pointer; top: -4px; z-index: 3;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png" draggable="false" style="position: absolute; left: -17px; top: -361px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map</div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 0px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satellite</div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 0px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></section>

                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><script src="http://maps.gstatic.com/maps-api-v3/api/js/20/5/main.js"></script>
                        <script type="text/javascript" src="js/jquery.gmap.js"></script>

                        <script type="text/javascript">

                            jQuery('#google-map').gMap({

                                address: 'Melbourne, Australia',
                                maptype: 'ROADMAP',
                                zoom: 14,
                                markers: [
                                    {
                                        address: "Melbourne, Australia",
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

                        </script>

                    </div><!-- Google Map End -->

                    <div class="clear"></div>

                    <!-- Contact Info
                    ============================================= -->
                    <div class="row clear-bottommargin">

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-skype2"></i></a>
                                </div>
                                <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-twitter2"></i></a>
                                </div>
                                <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                            </div>
                        </div>

                    </div><!-- Contact Info End -->

                </div>