<?php
// for each template in the page settings, load it.
$content = Userpages::get(Auth::user()->id, $fpage, 'pagedesign', $fpagestyle);
$blocks = explode(";", $content);
foreach($blocks as $block){
    $path = "../../../../blocks/$block";
    require $path;
}
?>

            </div>

        </section><!-- #content end -->
