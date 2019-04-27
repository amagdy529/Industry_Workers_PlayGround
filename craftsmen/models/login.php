<?php
require_once '../controllers/DbConnection.php';
require_once '../controllers/user.php';

// session_start();
$pro = new user(DbConnection::getConnection());
$result = $pro->Login($_POST["email"],md5($_POST["password"]));
//var_dump($result);
//header("location: ../views/Add_product.php");

if ($result->num_rows == 1) {
	// output data of each row
    while($row = $result->fetch_assoc()) {
		
			session_start();
			$_SESSION['u_id']=$row['u_id'];
			$_SESSION['user_type']=$row['user_type'];
			setcookie("logged_user_id",$_SESSION['u_id'],time()+(86400*30),"/");
			setcookie("logged_user_type",$_SESSION['user_type'],time()+(86400*30),"/");
    		// var_dump($row);die('test');
        	if($row['user_type'] == "1")
			{
				header("location: ../users/list-users.php");
			}
			else if ($row['user_type'] == "2")
			{	
				header("location: ../requests/list-requests.php");
			}
			else if ($row['user_type'] == "3")
			{	
				// print_r($_SESSION);die;
				// die('here user');
				header("location: ../../craftsmen/index.php");	
			}
	
    }

}
else{

   header("location: ../Login-form.html"); 

}



?>