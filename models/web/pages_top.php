<?php

if (isset($_POST['submit']) && csrf_filter()) {
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

$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
?>