<?php
	
	class CommentLogin
	{	
		var $user;
		var $pw;
		//constructor
		public function __construct($user, $pw)
		{		
			$this->user = $user;
			$this->pw = $pw;
		}
		//displays the results if validation is ok
		function login()
		{
			include 'commentDB_conn.php';
			
			$sql = "select * from User where UserName = '" . mysql_real_escape_string($this->user) . "' and Password = '". mysql_real_escape_string($this->pw) ."'";

			$result = $conn->query($sql);
			
			while($row = $result->fetch_assoc())
			{
				$UserID = $row['UserID'];
				$Uname = $row['UserName'];
				$Uname = $conn->real_escape_string($Uname);						
			}
			$count=$result->num_rows;
			if($count==1)
			{			
				session_start();
				$_SESSION['sessionUserName']=$Uname;
				echo "<p><b>You are successfully logged in. Click <a href=\"comments.php\">here</a> for comment page.</b></p>";							
			}
			else
			{				
				echo "<b>Bad password or username</b>";
			}
		}
		//validates that ok values are entered
		function validate()
		{
			error_reporting(0);	
			if($this->user == "")
			{
				$errors[] = "Please enter a username";
			}
			if($this->user != "" && strlen($this->user) < 4)
			{
				$errors[] = "Username has to be at least 4 characters long";
			}
			if($this->user != "" && !preg_match("/^[a-zA-Z0-9 \-]{0,255}$/i", $this->user))
			{
				$errors[] = "Please do not enter unacceptable characters into the username field";
			}
			if($this->pw == "")
			{
				$errors[] = "Please enter a password";
			}
			if($this->pw != "" && strlen($this->pw) < 8)
			{
				$errors[] = "Password has to be at least 8 characters long";
			}
			if($this->pw != "" && !preg_match("/^[a-zA-Z0-9 \-]{0,255}$/i", $this->pw))
			{
				$errors[] = "Please do not enter unacceptable characters into the username field";
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
				$this->login();					
			}
		}
	}	
	
	//object of FizzBuzz
	$ok = new CommentLogin($_POST['username'], $_POST['commentpw']);
	//validating will in turn display the result since displayGame function is inside
	$ok->validate();
		
?>