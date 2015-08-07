<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

$userID = Auth::user()->id;
error_reporting( error_reporting() & ~E_NOTICE );
require 'models/shortcodes/shortcode_converter.php';
$pageId = 2;
print_r(convertShortcodes($pageId));
?>