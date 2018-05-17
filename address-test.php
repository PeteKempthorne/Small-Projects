<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PHP Address</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/pi.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<hgroup>
		<h2>PHP Address OOP</h2>
	</hgroup>
	<div id="fizz">	
	<?php

	class Address
	{	
		public $firstname;
		public $lastname;
		public $houseNo;
		public $street;
		public $town;
		public $county;
		public $postcode;
		//constructor
		public function __construct($firstname, $lastname, $houseNo, $street, $town, $county, $postcode)
		{	
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->houseno = $houseNo;
			$this->street = $street;
			$this->town = $town;
			$this->county = $county;
			$this->postcode = $postcode;
			
		}
		
		public function printAddress()
		{
			echo $this->firstname . " " . $this->lastname . "<br />";
			echo $this->houseno . " " . $this->street . "<br />";
			echo $this->town . "<br />";
			echo $this->county . "<br />";
			echo $this->postcode . "<br />";
		}
	}

	$addr1 = new Address("Dave", "Lister", "19", "Long Street", "Hastings", "East Sussex", "TN24 1KQ");
	$addr2 = new Address("Arnold", "Rimmer",  "15", "Quality Avenue", "Bexhill-On-Sea", "East Sussex", "TN40 7AK");
	
	echo $addr1->printAddress();

	?>
	</div>
</body>
</html>