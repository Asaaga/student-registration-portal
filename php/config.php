<?php
class databaseConnection{
	public function __construct(){
		global $conn;
		$conn = new mysqli("localhost", "root", "" , "portal");
		//check error 
		if(!$conn){
			die("Database cannot established connection properly: " . $conn->connect_error());
		}

	}
}

?>
