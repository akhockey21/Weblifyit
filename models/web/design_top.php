<?php
$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();
?> 