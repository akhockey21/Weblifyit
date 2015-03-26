<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url()); 
use Hazzard\Support\MessageBag;
$user = User::find(Auth::user()->id);

$pagesall = DB::table('userpages')->where('user_id', Auth::user()->id)->get();

$pageids = array();
foreach($pagesall as $filter_result){
    if ( in_array($filter_result->page_id, $pageids) ) {
        continue;
    }
    $pageids[] = $filter_result->page_id;
    echo $filter_result->page_id;
    ?>
<li>
<a href="#" id="<?php echo $filter_result->page_id; ?>"><?php echo Userpages::get(Auth::user()->id, $filter_result->page_id, 'pagename', true); ?></a>
</li>

<?php
}
?>