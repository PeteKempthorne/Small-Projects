<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Comment Section</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/comment.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
?>
<body>
	<nav>
		<?php
		if(isset($_SESSION['sessionUserName']))
		{
			 echo $_SESSION['sessionUserName'];
		}
		else
		{
			echo "<p><a href=\"comment-login.php\">Login</a></p>";
		}
		?>			
	</nav>

	<hgroup>
		<h2>PHP Comment Section</h2>
	</hgroup>
		
	<form action="" method="post">
	
		<div id="formComment">
			<fieldset>
			<legend>Form</legend>
			<?php /*
			<label for="username">Username:</label>			
			<input type="text" id="username" name="username" />*/
			?>
			<p><strong>Welcome <?php echo $_SESSION['sessionUserName']; ?></strong></p><br /><br /><br />
			<label for="comment">Comment:</label>
			<textarea id="comment" name="comment"></textarea><br /><br />
			<label for="submitcomment">Submit:</label>
			<input type="button" value="Submit" id="submitcomment"><br />
			</fieldset>
		</div>
	
	</form>
	<div id="fizz">
					
	</div>
</body>
</html>