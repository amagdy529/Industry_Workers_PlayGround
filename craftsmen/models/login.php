<?php
require_once '../controllers/DbConnection.php';
require_once '../controllers/user.php';

session_start();
$pro = new user(DbConnection::getConnection());
$result = $pro->Login($_POST["email"],md5($_POST["password"]));
//var_dump($result);
//header("location: ../views/Add_product.php");
 if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    		// var_dump($row);die('test');
        	if($row['u_id'] == "1")
			{
				$_SESSION['u_id']=$row['u_id'];
				$_SESSION['user_type']=$row['user_type'];
				setcookie("logged_user_id",$_SESSION['u_id'],time()+(86400*30),"/");
				setcookie("logged_user_type",$_SESSION['user_type'],time()+(86400*30),"/");
				header("location: ../users/list-users.php");
				// header("location: ../views/orders.html");
			}
			else if ($row['u_id'] != "2")
			{	
				$_SESSION['user_type']=$row['user_type'];
				$_SESSION['u_id']=$row['u_id'];
				setcookie("logged_user_id",$_SESSION['u_id'],time()+(86400*30),"/");		
				setcookie("logged_user_type",$_SESSION['user_type'],time()+(86400*30),"/");
				header("location: ../requests/list-requests.php");
			}
			else if ($row['u_id'] == "3")
			{	
				// die('here user');
				$_SESSION['user_type']=$row['user_type'];
				$_SESSION['u_id']=$row['u_id'];
				setcookie("logged_user_id",$_SESSION['u_id'],time()+(86400*30),"/");		
				setcookie("logged_user_type",$_SESSION['user_type'],time()+(86400*30),"/");
				header("location: ../../craftsmen/index.html");	
			}
	
    }

}
else{

   header("location: ../Login-form.html"); 

}


/*	if(mysqli_num_rows($result) > 0)  
           	{           		
           		$row=mysqli_fetch_array($result);

           		//ADMIN =============================
           		if($row['u_id'] = "1")
				{
					$_SESSION['id']=$row['u_id'];

					header("location: ../views/AdminMainPage.html");
				}

				//USER===============================
				else if ($row['u_id'] != "1")
				{	
					$_SESSION['id']=$row['u_id'];

					header("location: ../views/UserMainPage.html");	
				}
				else 
				{
					echo "<p> Please enter Vaild Data. </p> ";
				}


           	}
*/
?>