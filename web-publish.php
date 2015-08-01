<?php
require_once 'app/init.php';
if (!Auth::check())
    redirect_to(App::url());
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);

$templateid = Userwebsite::get(Auth::user()->id, 'template_id', true);
$pagesall   = DB::table('userpages')->where('user_id', Auth::user()->id)->get();

$domain = $_GET['subdomain'];
$path   = "userwebsites/web/$domain/";
if (file_exists($path)) {
    //make message pop up saying the domain is taken.
} else {
    Userwebsite::update(Auth::user()->id, 'sub_domain_name', $domain);
    Userwebsite::update(Auth::user()->id, 'path', $path);
    Userwebsite::update(Auth::user()->id, 'domainsetup', 1);
    mkdir("$path");
    
    $src = "templates/templates/$templateid/files2copy/";
    $dst = $path;
    //move all files in "files2move" folder of template
    function recurse_copy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }
    
    recurse_copy($src, $dst);
    
    $pageidsE = array();
    foreach ($pagesall as $filter_result) {
        if (in_array($filter_result->page_id, $pageidsE)) {
            continue;
        }
        $pageidsE[]   = $filter_result->page_id;
        $exportpageid = $filter_result->page_id;
        //if page id is 1, then build index.html, if not, then just build the html with the pagename
        if ($exportpageid == 1) {
            $path = Userwebsite::get(Auth::user()->id, 'path', true);
            $path = $path . "index.html";
            // Start output buffering
            ob_start();
            include 'templates/models/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        } else {
            $path     = Userwebsite::get(Auth::user()->id, 'path', true);
            $filename = preg_replace("/[^A-Za-z0-9]/", "", strtolower(Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true)));
            $path     = $path . "$filename.html";
            // Start output buffering
            ob_start();
            include 'templates/models/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        }
        
    }
}


?>
