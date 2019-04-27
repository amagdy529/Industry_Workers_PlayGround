<?php
include "front-header.php";
include "config.php";

$uploads_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/uploads";
$craftsmen_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/craftsmen/";

$result = mysqli_query($global_mysqli, "SELECT * FROM users Where user_type=2 ORDER BY u_id DESC"); // using mysqli_query instead

// print_r($_SESSION['u_id']);die;


include "index-body.php";

include "front-footer.php";