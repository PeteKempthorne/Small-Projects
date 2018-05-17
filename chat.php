<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Chat</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/chat.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<hgroup>
		<h2>PHP Chat</h2>
	</hgroup>
	
	<div id="chatarea">
					
	</div>

	<form action="" method="post">
	
		<div id="formChat">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" />
			<label for="comment">Comment:</label>
			<input type="text" id="comment" name="comment" />
			
			<input type="button" value="Submit" id="submitchat"><br />
			
		</div>
	
	</form>
	
</body>
</html>