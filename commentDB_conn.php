<?php
$servername = "localhost";
$username = "root";
$password = "";
$serverName = "commentdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $serverName);
// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

/*
class Database 
{
	protected $username;
	protected $password;
	protected $DbName;
	protected $serverName;

	public function __construct($Username, $password, $DbName, $serverName) 
	{
		$this->username = $username;
		$this->password = $password;
		$this->dbName = $DbName;
		$this->serverName = $serverName;
	}
}*/

?>