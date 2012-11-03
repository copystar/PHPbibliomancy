<?php

	require ("../db-vars.php");
	$dbc = mysql_connect($host, $username, $password) or die (mysql_error());
	mysql_select_db($database_name) or die (mysql_error());

	$randomLCclass = rand(1,207);
	$query = "SELECT * FROM " . TABLE_NAME . " WHERE LC_id=$randomLCclass";

	$result = mysql_query($query, $dbc) or die ('will not query');

	print 'A randomly generated call number. Hit refresh and see!'  . '</br>';

	$row = mysql_fetch_row($result);
	$randomLCrange = rand(1,$row[2]);
	echo $row[1] . $randomLCrange . '<br/>';

	// Much thanks to everyone who helped!
	// This is still work to be done. I need to add the cutter selector 
	// and add the rest of the call numbers to the mysql table

	mysql_close($dbc);

?>
