<?php

// require_once "../controllers/DbConnection.php";

// print_r('inside');
// print_r($_POST);
// print_r($_GET);
// print_r($_FILES);
// require_once "../header.php";
include_once("../config.php");


// $con = new mysqli("localhost","root","iti","industry");



if (isset($_POST['industry_name'])) {
    $industry_name = $_POST['industry_name'];
    print_r($industry_name);
    $result = mysqli_query($global_mysqli, "INSERT INTO industries(industry_name) VALUES('$industry_name')");
    print_r($result);
    // die('<br>here');

    header('Location:list-industry.php');
    exit;
} else {
    # code...
    die('failed');
}