# Connect to the database
$handle = sqlite_open( $_SERVER['DOCUMENT_ROOT'].'/stats.db', 0666, $sqliteError ) or die( $sqliteError );

# Use the same-origin policy to prevent cross-site scripting (XSS) attacks
# Remember to replace http://yourdomain.com/ with your actual domain
if( strpos( $_SERVER['HTTP_REFERER'], 'http://yourdomain.com/' ) !== 0 ) {
     die( "Do not call this script manually or from an external source." );
}

# Obtain the necessary information, strip HTML tags, and escape the string for backup proetection
$page = sqlite_escape_string( strip_tags( $_POST['page'] ) );
$referrer = sqlite_escape_string( strip_tags( $_POST['referrer'] ) );
$ip = sqlite_escape_string( strip_tags( $_SERVER['REMOTE_ADDR'] ) );


# Query the database so we can update old information
$sqlGet = 'SELECT * FROM stats WHERE page = \''.$page.'\'';
$result = sqlite_query( $handle, $sqlGet );