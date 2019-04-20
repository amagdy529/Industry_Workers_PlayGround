<?php

require_once "../../controllers/DbConnection.php";

print_r('inside');
print_r($_POST);
print_r($_GET);
print_r($_FILES);

$con = new mysqli("localhost","root","iti","industry");




if (isset($_POST['industry_name'])) {
    $industry_name = $_POST['industry_name'];
    $result = mysqli_query($con, "INSERT INTO industries(industry_name) VALUES('$industry_name')");
    print_r($result);
    die('here');
} else {
    # code...
    die('failed');
}
