<?php
//including the database connection file
include_once("../config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($global_mysqli, "DELETE FROM users  WHERE u_id=$id");
 
//redirecting to the display page (index.php in our case)
header('Location:list-users.php');

?>