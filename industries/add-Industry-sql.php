<?php

// require_once "../controllers/DbConnection.php";

print_r('inside');
print_r($_POST);
print_r($_GET);
print_r($_FILES);
require_once "../header.php";

// $con = new mysqli("localhost","root","iti","industry");




if (isset($_POST['industry_name'])) {
    $industry_name = $_POST['industry_name'];
    $result = mysqli_query($global_mysqli, "INSERT INTO industries(industry_name) VALUES('$industry_name')");
    print_r($result);
    /* This will give an error. Note the output
    * above, which is before the header() call */
    header('Location:list-industry.php');
    exit;
    die('here');
} else {
    # code...
    die('failed');
}