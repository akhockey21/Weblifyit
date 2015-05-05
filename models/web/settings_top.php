<?php
if (isset($_POST['item']) && csrf_filter()) {
$data = implode(',', $_POST['item']);

Userwebsite::update(Auth::user()->id, 'data', $data);
}
?>