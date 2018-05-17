<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Fizzbuzz</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/fizzbuzz.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<hgroup>
		<h2>PHP Fizzbuzz</h2>
	</hgroup>
		
	<form action="" method="post">
	
		<div id="formLayout">
		<fieldset>
		<legend>Form</legend>
		<label for="numberone">First Number:</label>
		<input type="text" id="numberone" name="numberone" /><br /><br /><br />
		<label for="numbertwo">Second Number:</label>
		<input type="text" id="numbertwo" name="numbertwo" /><br /><br /><br />
		<label for="submitnumbers">Submit:</label>
		<input type="button" value="Submit" id="submitnumbers"><br />
		</fieldset>
		</div>
	
	</form>
	<div id="fizz">
	<p id="result">
	
	</p>	
	</div>
</body>
</html>