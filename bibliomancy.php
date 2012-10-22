// $LC is an array containing key pair values, with the key being the LC range
// and the value being the maximum number of that range

// $RandomLC is the randomly selected LC range
// $RandomLCNumber is the randomly selected LC number
// $LC is the name of the array


<?php

$LC=array('AC' => 999,
	  'AE' => 90,
	  'AG' => 600);

$RandomLC = rand(0,2);

//Y U NO WORK?
echo $LC[$RandomLC];

// next step:
// $RandomLCNumber = rand(0,$LC[$RandomLC]);


?>
