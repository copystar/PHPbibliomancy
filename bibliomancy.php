<?php

	require ("db-vars.php");
	$dbc = mysql_connect($host,$username,$password) or die ('will not connect');
	mysql_select_db(DATABASE_NAME) or die (mysql_error());


	$query = "SELECT * FROM " . TABLE_NAME;

	echo $query . '</br>';
	echo $dbc . '</br>';

	$result = mysql_query($query,$dbc) or die ('will not query');

	mysql_close($dbc);

?>
