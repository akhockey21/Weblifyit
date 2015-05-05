<?php
if (isset($_POST['submitPageTextEdit']) && csrf_filter()) {
    $pagestyle = $_POST['pagestyle'];
    $input1 = $_POST['question_1'];
    $input2 = $_POST['question_2'];
    $input3 = $_POST['question_3'];
    Userwebsitetext::update(Auth::user()->id, $pagestyle, "$input1;$input2;$input3");
}

if (isset($_POST['submit']) && csrf_filter()) {

    if (isset($_POST['bizname'])) {
                $bizname = $_POST['bizname'];
				Usermeta::update(Auth::user()->id, 'business_name', $bizname);
			} 
     if (isset($_POST['bizphone'])) {
                $bizphone = $_POST['bizphone'];
				Usermeta::update(Auth::user()->id, 'company_busines_phone', $bizphone);
			} 
     if (isset($_POST['bizemail'])) {
                $bizemail = $_POST['bizemail'];
				Usermeta::update(Auth::user()->id, 'company_email', $bizemail);
			} 
     if (isset($_POST['bizst'])) {
                $bizst = $_POST['bizst'];
				Usermeta::update(Auth::user()->id, 'company_address_st', $bizst);
			}
     if (isset($_POST['bizcity'])) {
                $bizcity = $_POST['bizcity'];
				Usermeta::update(Auth::user()->id, 'company_address_city', $bizcity);
			} 
     if (isset($_POST['bizstate'])) {
                $bizstate = $_POST['bizstate'];
				Usermeta::update(Auth::user()->id, 'company_address_state', $bizstate);
			} 
     if (isset($_POST['bizzip'])) {
                $bizzip = $_POST['bizzip'];
				Usermeta::update(Auth::user()->id, 'company_address_zip', $bizzip);
			} 
     if (isset($_POST['webtitle'])) {
                $webtitle = $_POST['webtitle'];
				Userwebsite::update(Auth::user()->id, 'title', $webtitle);
			} 
     if (isset($_POST['webdescription'])) {
                $webdescription = $_POST['webdescription'];
				Userwebsite::update(Auth::user()->id, 'meta_description', $webdescription);
			} 
     if (isset($_POST['uselogo'])) {
                $uselogo = $_POST['uselogo'];
				Userwebsite::update(Auth::user()->id, 'uselogo', $uselogo);
			} 
     if (isset($_POST['logotext'])) {
                $logotext = $_POST['logotext'];
				Userwebsite::update(Auth::user()->id, 'logotext', $logotext);
			}
     if (isset($_POST['maincolor'])) {
                $maincolor = $_POST['maincolor'];
				Userwebsite::update(Auth::user()->id, 'main_color', $maincolor);
			}
     if (isset($_POST['sidecolor'])) {
                $sidecolor = $_POST['sidecolor'];
				Userwebsite::update(Auth::user()->id, 'side_color', $sidecolor);
			}
     if (isset($_POST['pagelayout'])) {
                $fpage = $_POST['page'];
                $pagelayout = $_POST['pagelayout'];
				Userpages::update(Auth::user()->id, $fpage, 'pagelayout', $pagelayout);
			}
}

if (isset($_POST['submitNewPage']) && csrf_filter()) {
        $fpage = $_POST['page'];
        if (isset($_POST['pagename'])) {
        $fpagename = $_POST['pagename'];
        Userpages::update(Auth::user()->id, $fpage, 'pagename', $fpagename);  
    }
    if (isset($_POST['pagenavoption'])) {
        $fpagenav = $_POST['pagenavoption'];
        Userpages::update(Auth::user()->id, $fpage, 'navhide', $fpagenav); 
    }
    if (isset($_POST['pagestyle'])) {
        $fpagestyle = $_POST['pagestyle'];
        Userpages::update(Auth::user()->id, $fpage, 'style', $fpagestyle); 
    }
    if (isset($_POST['visibility'])) {
        $fpagevisib = $_POST['visibility'];
        Userpages::update(Auth::user()->id, $fpage, 'visibility', $fpagevisib); 
    }
    if (isset($_POST['pagetitle'])) {
        $fpagetitle = $_POST['pagetitle'];
        Userpages::update(Auth::user()->id, $fpage, 'title', $fpagetitle); 
    }
    if (isset($_POST['pagedescription'])) {
        $fpagedescription = $_POST['pagedescription'];
        Userpages::update(Auth::user()->id, $fpage, 'description', $fpagedescription); 
    }
}

if (isset($_POST['publishwebsite']) && csrf_filter()) {
    if (isset($_POST['subdomain'])) {
        $domain = $_POST['subdomain'];
        $path = "userwebsites/web/$domain/";
        if (file_exists($path)) {
   //make message pop up saying the domain is taken.
} else {
    Userwebsite::update(Auth::user()->id, 'sub_domain_name', $domain);
    Userwebsite::update(Auth::user()->id, 'path', $path);
    Userwebsite::update(Auth::user()->id, 'domainsetup', 1);
    mkdir("$path"); 
}
 } 
}
?>