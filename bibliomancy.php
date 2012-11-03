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

  $cutter_letter=array(' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
  $random_letter_choice = rand(1,26);
  $random_cutter_letter = rand(1,9);
  $random_cutter_number = rand(1,9);

  echo $row[1] . $randomLCrange . '.' . $cutter_letter[$random_cutter_letter] . $random_cutter_number .  '<br/>';

  // Much thanks to everyone who helped!

  mysql_close($dbc);

?>
