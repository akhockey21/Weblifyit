<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

require 'models/domain/domain.php';


$domains = array('example.net','example.org','example.info', 'weblifyit.com', 'speedfixit.com' );

$results = $nc->domainsCheck( $domains );
	
echo "<ul>";
	
foreach ( $results as $domain => $available ) {

    $status = ( $available ) ?'available' :'not available';
	
    echo "<li>$domain: $status</li>";

}
	
echo "</ul>";
?>