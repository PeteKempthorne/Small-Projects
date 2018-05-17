<?php
	session_start();
	class Comment
	{	
		public $username;
		//constructor
		public function __construct($username)
		{		
			$this->username = $username;
		}			
		public function displayComment()
		{	
			echo "<strong>User: </strong>" . $this->username . "<br />";
		}
	}
	
	$comm1 = new Comment($_SESSION['sessionUserName']);
	
	echo $comm1->displayComment();
		
?>