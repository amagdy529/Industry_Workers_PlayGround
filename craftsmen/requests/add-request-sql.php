<?php 
include_once("../config.php");
print_r($_POST);
print_r('inside add request sql');




// $con = new mysqli("localhost","root","iti","industry");



if (isset($_POST['request_desc'])) {
    $request_desc = $_POST['request_desc'];
    $requester_id = $_POST['requester_id'];
    $request_date = $_POST['request_date'];
    $workerId = $_POST['workerId'];
    

    $query = "INSERT INTO requests(`requester_id`,`worker_id`,`date`,`desc`) VALUES ( ".$requester_id.", ".$workerId.", ".date("Y-m-d").", '".$request_desc."')";
 
    $result = mysqli_query($global_mysqli, $query) ;
    
    print_r('<br>');
    print_r($query);
    print_r($result);
    // die('<br>here');

    header('Location:../workers-list.php');
    exit;
} else {
    # code...
    die('failed');
}