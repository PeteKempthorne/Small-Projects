<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Find Pi to x Decimal Places</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/pi.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<hgroup>
		<h2>PHP Find Pi to x Decimal Places</h2>
	</hgroup>
		
	<form action="" method="post">
	
		<div id="formLayout">
		<fieldset>
		<legend>Form</legend>
		<label for="pinumber">Number:</label>
		<input type="text" id="pinumber" name="pinumber" /><br /><br /><br />
		<label for="submitdecimals">Submit:</label>
		<input type="button" value="Submit" id="submitdecimals"><br />
		</fieldset>
		<p><Strong>Please note that any number higher than 48 doesnt work.</strong></p>
		</div>
	
	</form>
	<div id="fizz">
	<p id="result">
	
	</p>	
	</div>
</body>
</html>