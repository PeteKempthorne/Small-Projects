<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Comment Login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/commentlogin.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
?>
<body>
	<hgroup>
		<h2>PHP Comment Login</h2>
	</hgroup>
		
	<form action="" method="post">
	
		<div id="formComment">
			<fieldset>
			<legend>Form</legend>
			<label for="username">Username:</label>			
			<input type="text" id="username" name="username" /><br /><br /><br />
			<label for="commentpw">Password:</label>
			<input type="password" id="commentpw" name="commentpw" /><br /><br /><br />
			<label for="submitcommentlogin">Submit:</label>
			<input type="button" value="Submit" id="submitcommentlogin"><br />
			</fieldset>
		</div>
	
	</form>
	<div id="fizz">
					
	</div>
</body>
</html>