<?php
/**
* 
*/
class DbConnection
{
	public static function getConnection()
	{
		$con = new mysqli("localhost","root","iti","industry");   
		// $con = new mysqli("127.0.0.1:3306","adminfeFv4jE","Urh58Uq4ebkA","cafteria");   
		// $con = new mysqli("localhost","root","iti","cafteria");   
		
		if ($con->connect_error) {
			die('Connection Error :	'.$con->connect_error);
		}
		return $con;
	}
	public static function closeConnection($connection)
	{
		$this->connection->close();
	}


}

?>