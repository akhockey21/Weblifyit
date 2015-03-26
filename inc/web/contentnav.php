<h3>Basic Settings:</h3>
                    <ul class="sidebar-nav animation-slideRight" id="sidebarnav"> 
                       
<li>
<a href="#" id="logobtn">Logo & Title</a>
</li>
<li>
<a href="#" id="colorbtn">Color & Style</a>
</li>  
<li>
<a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Business Information</a>
<ul style="display: none;">
<li>
<a href="#" id="bizcontactbtn">Contact Info</a>
</li>
<li>
<a href="#" id="bizaddressbtn">Address</a>
</li>
</ul>
</li> 
 
<li>
<a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Website Content</a>
<ul style="display: none;">
<li>
<a href="#" id="webhomepagebtn">Homepage</a>
</li>
<li>
<a href="#" id="webaboutbtn">About Us</a>
</li>
    <li>
<a href="#" id="webservicebtn">Service/Products</a>
</li>
    <li>
<a href="#" id="webcontactbtn">Conact Us</a>
</li>
</ul>
</li>
  <li>
<a href="#" id="webimagesbtn">Website Images</a>
</li>  
<li>
</li>

                    </ul>

<div class="sidebar-nav animation-slideLeft" id="logo" style="display: none;"> 
   <li class="previous"><a id="previousbutton"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action=""> 
<div class="form-group"> 
                            <label class="col-md-12 control-label" for="webtitle">Website Title</label>
                            <div class="col-md-12">
                                <input type="text" id="webtitle" name="webtitle" class="form-control" placeholder="Website Name" value="<?php echo $webtitle ?>"> 
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="webdescription">Website Description</label>
                            <div class="col-md-12">
                               <textarea id="webdescription" name="webdescription" class="form-control" placeholder="Enter Your Website Description"><?php echo $webdescription ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label">Use Logo?</label>
                            <div class="col-md-12">
                                <label class="switch switch-primary" for="uselogo">
                                    <input type="checkbox" id="uselogo" name="uselogo" value="1">
                                    <span data-toggle="tooltip" title="Yes, use my logo rather than text."></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="logotext">Logo Text</label>
                            <div class="col-md-12">
                                <input type="text" id="logotext" name="logotext" class="form-control" placeholder="Logo Text" value="<?php echo $logotext ?>">
                            </div> 
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
    <form class="dropzone dz-clickable themed-background"><div class="dz-default dz-message"><span>Drop Logo Here</span></div>
    </form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="color" style="display: none;">
   <li class="previous"><a id="previousbutton1"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="maincolor">Main Website Color</label>
                            <div class="col-md-12">
        
                                <input type="text" id="example-colorpicker" name="maincolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $maincolor?>">
                            </div>
                        </div>
<div class="form-group">
                            <label class="col-md-12 control-label" for="sidecolor">Side Website Color</label>
                            <div class="col-md-12">
        
                                <input type="text" id="example-colorpicker" name="sidecolor" class="form-control input-colorpicker colorpicker-element" value="<?php echo $sidecolor ?>"> 
                            </div>
                        </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="bizcontact" style="display: none;"> 
   <li class="previous"><a id="previousbutton2"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name" value="<?php echo $bizName ?>">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone" value="<?php echo $bizPhone ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email" value="<?php echo $bizEmail ?>">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="bizaddress" style="display: none;">
   <li class="previous"><a id="previousbutton3"><i class="fa fa-chevron-left"></i> Back</a></li>
    
  <form method="post" action="">

                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizst">Street Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizst" name="bizst" class="form-control" placeholder="Enter Your Business' Street Name" value="<?php echo $bizSt ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizcity">City</label>
                            <div class="col-md-12">
                                <input type="text" id="bizcity" name="bizcity" class="form-control" placeholder="Enter Your Business' City" value="<?php echo $bizCity ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizstate">State</label>
                            <div class="col-md-12">
                                <input type="text" id="bizstate" name="bizstate" class="form-control" placeholder="Enter Your Business State" value="<?php echo $bizState ?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizzip">Zip Code</label>
                            <div class="col-md-12">
                                <input type="text" id="bizzip" name="bizzip" class="form-control" placeholder="Enter Your Business Zip Code" value="<?php echo $bizZip ?>">
                            </div>
                        </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="webhomepage" style="display: none;">
   <li class="previous"><a id="previousbutton4"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="webabout" style="display: none;"> 
   <li class="previous5"><a id="previousbutton"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="webservice" style="display: none;">
   <li class="previous6"><a id="previousbutton"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="webcontact" style="display: none;">
   <li class="previous"><a id="previousbutton7"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>




<div class="sidebar-nav animation-slideLeft" id="webimages" style="display: none;"> 
   <li class="previous"><a id="previousbutton8"><i class="fa fa-chevron-left"></i> Back</a></li>
  
  <form method="post" action="">
<div class="form-group">
                            <label class="col-md-12 control-label" for="bizname">Business Name</label>
                            <div class="col-md-12">
                                <input type="text" id="bizname" name="bizname" class="form-control" placeholder="Enter Your Business' Name">
                            </div>
                        </div>
  <div class="form-group">
                            <label class="col-md-12 control-label" for="bizphone">Business Phone</label>
                            <div class="col-md-12">
                                <input type="text" id="bizphone" name="bizphone" class="form-control" placeholder="Enter Your Business' Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bizemail">Business Email</label>
                            <div class="col-md-12">
                                <input type="text" id="bizemail" name="bizemail" class="form-control" placeholder="Enter Your Business' Email">
                            </div>
                    </div>
  <div class="form-group form-actions text-center">
                        <button type="submit" class="btn btn-sm btn-success" name="submit">Save Changes</button>
                    </div>
</form>
                    </div>