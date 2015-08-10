<?php
/**
 * Title: Web Publish Page
 * Note: This page is used to publish the users website
 * 
 */
require_once 'app/init.php';
if (!Auth::check())
    redirect_to(App::url());
use Hazzard\Support\MessageBag;
$userID = Auth::user()->id;
/**
 * @$templateid : Get the template ID
 * @$pagesall : Get all the pages that the user has created
 */
$templateid = WebsiteSettings::get($userID, 'template_id', true);
$pagesall   = DB::table('pages_manage')->where('user_id', $userID)->get();

require_once 'models/shortcodes/shortcode_converter.php';

/**
 * Generate a unique domain id that will be the path of the users website.
 * Update database with the unique domain id.
 */
$uniqueDomainID = WebsiteSettings::get($userID, 'website_path', true);
if (!$uniqueDomainID) {
    $uniqueDomainID = uniqid();
    WebsiteSettings::update($userID, 'website_path', $uniqueDomainID);
}
$path = "userwebsites/web/$uniqueDomainID/";

if (file_exists($path)) {
    //check if another user has the unique domain ID
    
    //If another user does NOT have the unique domain ID, then erase path, and continue with website publish
    
    function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        rrmdir($dir . "/" . $object);
                    else
                        unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
    rrmdir($path);
    
    
    mkdir("$path");
    
    $src = "templates/templates/$templateid/files2copy/";
    $dst = $path;
    /**
     * Function to Move all the files from "files2copy" folder, to the users
     * destination folder
     */
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
    
    /**
     * Call the function
     */
    recurse_copy($src, $dst);
    
    /**
     * Because there are multiple fields witht he same page id in the
     * $pagesall variable, this array will filter the ones that arnt unique.
     */
    $pageidsE = array();
    foreach ($pagesall as $filter_result) {
        if (in_array($filter_result->page_id, $pageidsE)) {
            continue;
        }
        $pageidsE[]   = $filter_result->page_id;
        $exportpageid = $filter_result->page_id;
        //if page id is 1, then build index.html, if not, then just build the html with the pagename
        if ($exportpageid == 1) {
            $path = "userwebsites/web/$uniqueDomainID/" . "index.html";
            // Start output buffering
            ob_start();
            include 'models/publish/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        } else {
            $filename = preg_replace("/[^A-Za-z0-9]/", "", strtolower(PagesManage::get(Auth::user()->id, $filter_result->page_id, 'page_name', true)));
            $path     = "userwebsites/web/$uniqueDomainID/" . "$filename.html";
            // Start output buffering
            ob_start();
            include 'models/publish/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        }
        /**
         * Convert the style.php into style.css
         */
        // Start output buffering
        $path = "userwebsites/web/$uniqueDomainID/css/" . "style.css";
        ob_start();
        include "templates/templates/$templateid/style.php";
        
        // saving captured output to file
        file_put_contents("$path", ob_get_contents());
        // end buffering and displaying page
        ob_end_clean();
    }
    
} else {
    mkdir("$path");
    
    $src = "templates/templates/$templateid/files2copy/";
    $dst = $path;
    /**
     * Function to Move all the files from "files2copy" folder, to the users
     * destination folder
     */
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
    
    /**
     * Call the function
     */
    recurse_copy($src, $dst);
    
    /**
     * Because there are multiple fields witht he same page id in the
     * $pagesall variable, this array will filter the ones that arnt unique.
     */
    $pageidsE = array();
    foreach ($pagesall as $filter_result) {
        if (in_array($filter_result->page_id, $pageidsE)) {
            continue;
        }
        $pageidsE[]   = $filter_result->page_id;
        $exportpageid = $filter_result->page_id;
        //if page id is 1, then build index.html, if not, then just build the html with the pagename
        if ($exportpageid == 1) {
            $path = "userwebsites/web/$uniqueDomainID/" . "index.html";
            // Start output buffering
            ob_start();
            include 'models/publish/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        } else {
            $filename = preg_replace("/[^A-Za-z0-9]/", "", strtolower(PagesManage::get(Auth::user()->id, $filter_result->page_id, 'page_name', true)));
            $path     = "userwebsites/web/$uniqueDomainID/" . "$filename.html";
            // Start output buffering
            ob_start();
            include 'models/publish/build.php';
            
            // saving captured output to file
            file_put_contents("$path", ob_get_contents());
            // end buffering and displaying page
            ob_end_clean();
            
        }
        /**
         * Convert the style.php into style.css
         */
        // Start output buffering
        $path = "userwebsites/web/$uniqueDomainID/css/" . "style.css";
        ob_start();
        include "templates/templates/$templateid/style.php";
        
        // saving captured output to file
        file_put_contents("$path", ob_get_contents());
        // end buffering and displaying page
        ob_end_clean();
    }
}


?>
