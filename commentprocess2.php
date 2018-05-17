<?php
	
	class Comment
	{	
		public $comment;
		//constructor
		public function __construct($comment)
		{		
			$this->comment = $comment;
		}			
		public function displayComment()
		{
			echo $this->comment . "<br />";
		}
	}
	
	$comm1 = new Comment($_POST['comment']);
	
	echo $comm1->displayComment();
		
?>