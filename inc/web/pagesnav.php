<div class="sidebar-section clearfix sidebar-nav-mini-hide themed-background">

<div style="text-align: center;"><h3>Pages</h3></div>

</div>
                    <ul class="sidebar-nav animation-slideRight" id="sidebarnav"> 
                       
        <?php

$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id; ?>
<li>
<a href="#" id="<?php echo $filter_result->page_id; ?>"><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></a>
</li>
                        <?php
}
$tot = count($pageids);
$total = $tot + 1;
?> 
 
  <li>
<a href="#addpage" class="btn btn-danger" data-toggle="modal" data-placement="bottom" onclick="getElementById('newpageidval').value='<?php echo "$total"; ?>'">Add a New Page</a>
</li>  
<li>
</li>
 
                    </ul>