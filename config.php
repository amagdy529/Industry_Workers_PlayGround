<?php

/**
 * 
 * 
 $pMysqli = new mysqli('p:'.DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 */

 $con = new mysqli("localhost","root","iti","industry"); 
 
$databaseHost = 'localhost';
$databaseName = 'industry';
$databaseUsername = 'root';
$databasePassword = 'iti';
 
$global_mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>