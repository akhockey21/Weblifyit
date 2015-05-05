<?php
if (isset($_POST['submit']) && csrf_filter()) {
        $fpage = $_POST['page'];
        if (isset($_POST['pagedesign'])) {
        $fpagename = $_POST['pagedesign'];
        Userpages::update(Auth::user()->id, $fpage, 'pagedesign', $fpagename);  
    }
} 

$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
 
?> 