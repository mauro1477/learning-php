<?php
	/*

	*/
	$colors = array('blue', 'red', 'green');
	print_r($colors); // print out array
	echo "<br>";
	for($i = 0; $i < 3; $i++)//index through array
	{
		echo '<p>'.$colors[$i].'</p>';// Print on each line with <p>stuff</p>
	}

	$colors[] = 'yellow'; // Add a element to the array
	print_r($colors);
	/////////////////////////////////////////////////////////////////////////////
	$hometowns=array(
		'joe'  => 'Boulder','CO',
		'mike' => 'Boise','ID',
		'ryan' => 'Payette','ID',
	);

	echo '<pre>';
	print_r($hometowns);
	echo '</pre>';

	echo '<p>'.$hometowns['joe'].'</p>';

	$people = array(
		'joe' => array(
			'age' =>23,
			'job' =>'teacher',
			'state' => 'CO',
		),
		'mike' => array(
			'age' => 30,
			'job' => 'mechanic',
			'state' => 'ID',
		),
		'ryan' => array(
			'age' => 25,
			'job' => 'rapper',
			'state' => 'ID',
		),
	);

	echo '<pre>';
	print_r($people);
	echo '</pre>';

	echo '<pre>'.$people['joe']['age'].'</pre>'
?>
