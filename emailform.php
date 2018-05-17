<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>HTML E-Mail Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<hgroup>
		<h2>HTML E-Mail Form</h2>
	</hgroup>
		
	<form action="emailprocess.php" method="post">
	
		<div id="formLayout">
		<fieldset>
		<legend>Form</legend>
		<label for="emailtitle">E-mail Title:</label>
		<input type="text" id="emailtitle" name="emailtitle" /><br /><br /><br />
		<label for="emailto">To:</label>
		<input type="text" id="emailto" name="emailto" /><br /><br /><br />
		<label for="emailbody">Message:</label>
		<textarea id="emailbody" name="emailbody"></textarea><br /><br />
		<label for="submitnew">Submit:</label>
		<input type="submit" value="Submit" id="submitmail"><br />
		</fieldset>
		</div>
	
	</form>
</body>
</html>