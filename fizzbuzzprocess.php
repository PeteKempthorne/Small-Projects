<?php
	
	class Fizzbuzz
	{	
		var $numberuno;
		var $numberduo;
		//constructor
		public function __construct($numberuno, $numberduo)
		{		
			$this->numberuno = $numberuno;
			$this->numberduo = $numberduo;
		}			
		public function fizzBuzz()
		{
			return ". <strong>Fizzbuzz</strong><br />";
		}
		public function fizz()
		{
			return ". Fizz<br />";
		}
		public function buzz()
		{
			return ". Buzz<br />";
		}
		//displays the results if validation is ok
		function displayGame()
		{
			//capped for 100 results but could be changed
			for($x = 1; $x <= 100; $x++)
				{
				if ($x % $this->numberuno == 0 and $x % $this->numberduo == 0)
				{
					echo $x . $this->fizzBuzz();
				}
				elseif($x % $this->numberuno == 0)
				{
					echo $x . $this->fizz();
				}
				elseif($x % $this->numberduo == 0)
				{
					echo $x . $this->buzz();
				}
				else
				{
					//could have made another function for the text here
					echo $x . ". $x<br />";
				}
			}
		}
		//validates that ok values are entered
		function validate()
		{
			error_reporting(0);	
			if($this->numberuno == "")
			{
				$errors[] = "Please enter a number in box one";
			}
			if($this->numberuno > 10)
			{
				$errors[] = "Box one number has to be a number between 1 and 10 (2 to 9)";
			}
			if($this->numberuno < 1)
			{
				$errors[] = "Box one number has to be a number between 1 and 10 (2 to 9)";
			}
			if($this->numberuno != "" && !preg_match("/^[0-9\-]{0,255}$/i", $this->numberuno))
			{
				$errors[] = "Please only enter a number in box one. No spaces, letters or symbols allowed.";
			}
			if($this->numberduo == "")
			{
				$errors[] = "Please enter a number in box two";
			}
			if($this->numberduo > 10)
			{
				$errors[] = "Box two number has to be a number between 1 and 10 (2 to 9)";
			}
			if($this->numberduo < 1)
			{
				$errors[] = "Box two number has to be a number between 1 and 10 (2 to 9)";
			}
			if($this->numberduo != "" && !preg_match("/^[0-9\-]{0,255}$/i", $this->numberduo))
			{
				$errors[] = "Please only enter a number in box two. No spaces, letters or symbols allowed.";
			}
			//displays all errors in the array
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
				$this->displayGame();					
			}
		}
	}	
	
	//object of FizzBuzz
	$ok = new Fizzbuzz($_POST['numberone'], $_POST['numbertwo']);
	//validating will in turn display the result since displayGame function is inside
	$ok->validate();
	
	//test code
	//echo $ok->numberuno;
	//echo $ok->numberduo;
		
?>