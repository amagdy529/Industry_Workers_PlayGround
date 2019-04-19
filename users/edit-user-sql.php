<?php

include_once("../config.php");

print_r('inside');
print_r($_POST);
// print_r($_GET);
print_r($_FILES);
require_once "../header.php";

// $con = new mysqli("localhost","root","iti","industry");


$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$upfile = "../assets/img/".$_FILES['pic']['name'] ;
// Does the file have the right MIME type?
if (!($_FILES['pic']['type'] =="image/jpg" OR $_FILES['pic']['type'] =="image/gif" OR $_FILES['pic']['type'] =="image/jpeg" OR $_FILES['pic']['type'] =="image/png"  ) )
{
    echo 'Problem: file is not Image';
}
if (is_uploaded_file($_FILES['pic']['tmp_name']))
{
    if (!move_uploaded_file($_FILES['pic']['tmp_name'], $upfile))
    {
        echo 'Problem: Could not move file to destination directory';
        exit;
    }
    else
    {
        //echo 'Problem: Possible file upload attack. Filename: ';
        //echo $_FILES['pic']['name'];
    }
    //echo 'File uploaded successfully<br><br>';
}

if(isset($_POST['update']))
{    
    $user_id = $_POST['id'];
    
    $name=$_POST["username"];

    // checking empty fields
    if(empty($name)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $sql = "UPDATE users SET u_name='".$_POST["username"]."',u_email='".$_POST["email"]."', u_password='".$_POST["password"]."' , u_img='".$_FILES['pic']['name']."', industry_no='".$_POST["industry"]."' , user_type='".$_POST["user_type"]."' WHERE u_id='".$user_id."' ";

        $result = mysqli_query($global_mysqli, $sql);
        // die;
        //redirectig to the display page. In our case, it is index.php
        // header('Location:list-users.php');
    }
}






// // [username] => test [email] => a@a.com [password] => 123 [industry] => volvo [user_type] => 1
// if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
//     $result = mysqli_query($global_mysqli, "INSERT INTO users (u_name,u_email,u_password,industry_no,user_type,u_img) VALUES ( '".$_POST["username"]."', '".$_POST["email"]."', md5('".$_POST["password"]."'),
// 	".$_POST["industry"].", '".$_POST ["user_type"]."', '".$_FILES['pic']['name']."')") ;

//     /* This will give an error. Note the output
//     * above, which is before the header() call */
//     header('Location:list-users.php');
//     exit;
//     die('here');
// } else {
//     # code...
//     die('failed to add user');
// }