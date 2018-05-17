<?php

	$pinumber = $_POST['pinumber'];

	error_reporting(0);	
	if($pinumber == "")
	{
		$errors[] = "Please enter a number in the box";
	}
	if($pinumber > 48)
	{
		$errors[] = "Number has to be a number between 0 and 49 (1 to 48)";
	}
	if($pinumber < 1)
	{
		$errors[] = "Number has to be a number between 0 and 49 (1 to 48)";
	}
	if($pinumber != "" && !preg_match("/^[0-9\-]{0,255}$/i", $pinumber))
	{
		$errors[] = "Please only enter a number in the one. No spaces, letters or symbols allowed.";
	}
	if($errors)
	{
		echo "<em>The following problem(s) occured:</em><br />\n";
		for ($a=0; $a < count($errors); $a++)
		{
			echo "$errors[$a] <br />\n";
		}
	}
	else
	{
		echo number_format(pi(), $pinumber, '.', '');
		//echo $pinumber;
			
	}
	
	
	
?>