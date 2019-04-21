<?php

include_once("../config.php");

print_r('inside');
print_r($_POST);
// print_r($_GET);
print_r($_FILES);
// require_once "../header.php";

// $con = new mysqli("localhost","root","iti","industry");


$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$upfile = "../../uploads/".$_FILES['pic']['name'] ;
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

$image_var = 'image';

if (isset($_POST['wh_id'])) {
    
    $result = mysqli_query($global_mysqli, "INSERT INTO images (work_history_id,$image_var) VALUES ( '".$_POST["wh_id"]."', '".$_FILES['pic']['name']."')") ;
    
    /* This will give an error. Note the output
    * above, which is before the header() call */
    header('Location:add-image.php');
    exit;
    die('here');
} else {
    # code...
    die('failed to add user');
}
