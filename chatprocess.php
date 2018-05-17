<?php
	
	class Comment
	{	
		public $username;
		public $comment;
		
		//constructor
		public function __construct($username, $comment)
		{		
			$this->username = $username;
			$this->comment = $comment;
		}			
		public function displayComment()
		{	
			//replaces some text with small images of emoticons in the chat. More to come maybe
			$this->comment = str_replace("Kappa", "<img src=\"img/Kappa.png\" alt=\"Kappa\" title=\"Kappa\"></img>", $this->comment);
			$this->comment = str_replace(":)", "<img src=\"img/smiley.png\" alt=\":)\" title=\":)\"></img>", $this->comment);
			$this->comment = str_replace(":(", "<img src=\"img/sadface.png\" alt=\":(\" title=\":(\"></img>", $this->comment);
			$this->comment = str_replace("8)", "<img src=\"img/glasses.png\" alt=\"8)\" title=\"8)\"></img>", $this->comment);
			$this->comment = str_replace(":|", "<img src=\"img/straightface.png\" alt=\":|\" title=\":|\"></img>", $this->comment);
			
			echo "<strong>" . $this->username . ": </strong>" .
			$this->comment . "<br />";
		}
		function validateComment()
		{
			$this->comment = trim($this->comment);
			$this->comment = htmlspecialchars($this->comment);
			
			echo $this->displayComment();
			
		}
	}	
	
	$comm1 = new Comment($_POST['username'], $_POST['comment']);
	//validating the comment also displays the comment from within the function
	$comm1->validateComment();
	
	//echo $comm1->displayComment();
		
?>