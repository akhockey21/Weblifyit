<?php

require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 

use Hazzard\Support\MessageBag;
$user = Auth::user()->id;
$display_mediaAdder = false;

require 'models/shortcodes/shortcode_converter.php';


convertShortcodes(2);
?>