<?php
	$name = "Ian"; //Heading
	$city = "Boulder";
	$movie = "Starwars";//Italics
	$friend = "Omar"; //Bold
	$candy  = "sour patch kids";
?>


	<h1>Hello <?php echo $name; ?>!</h1>
	<?php
		//Developers want the soure code to be readable through the view page souce 
		echo "<p> I'm so glad you could come to $city today. <b>$friend</b> will be cooking on the grill today.\n\n</p>";
		echo "<p> Did you bring the $candy and the <i>$movie moive<i>?</p>"
	?>
