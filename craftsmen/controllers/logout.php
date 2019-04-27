<?php
session_start();
setcookie("login","",time()-3600,"/");
unset($_SESSION['u_id']);
unset($_SESSION['user_type']);
unset($_COOKIE['logged_user_id']);
unset($_COOKIE['logged_user_type']);
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
header("location: ../../craftsmen/index.php");
?>