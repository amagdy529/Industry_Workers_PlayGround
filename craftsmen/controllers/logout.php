<?php
session_start();
setcookie("login","",time()-3600,"/");
unset($_SESSION['u_id']);
unset($_COOKIE['logged_user_id']);
unset($_COOKIE['logged_user_type']);
// print_r($_COOKIE);
// die;				
// $_SESSION['u_id']=$row['u_id'];
// die('inside logout');
header("location: ../../craftsmen/index.html");
?>