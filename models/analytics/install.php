<?php	
	# Open the database
	$handle = sqlite_open( $_SERVER['DOCUMENT_ROOT'].'stats.db', 0666, $sqliteError ) or die(  $sqliteError  );

	# Set the command to create a table
	$sqlCreateTable = "CREATE TABLE stats(page text UNIQUE, ip text, views UNSIGNED int DEFAULT 0, referrer text DEFAULT '')";

	# Execute it
	sqlite_exec( $handle, $sqlCreateTable );
	
	# Print that we are done
	echo 'Finished!';
?>