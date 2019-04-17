<?php 

    include_once("config.php");
    echo "inside header";
    $users_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/views/all-users.php";
    //including the database connection file
    $path = $_SERVER['REQUEST_URI'];
    $file = basename($path);         // $file is set to "index.php"
    $file = basename($path, ".php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$file?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="../assets/js/getUserInfo.js"></script> -->
</head>
<body>



<div class="col-sm-12">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Industry CoWorkers</a>
      </div>
      <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="orders.html">Home</a></li> -->
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="<?=$users_url?>">Users</a></li>
            


        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><img src="" width="50" height="50" id="userImg" /> </li>
            <li><a href="#" id="userName"></a></li>
            <li><a href="../controllers/logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
</div>


<style>
    .well {
        background-color: black;
    }

    .col-sm-2 {

        padding: 10px;
    }

    .shape {
        border: 1px solid Gainsboro;
    }

    table {}


    .col-sm-4 {


        border: 1px solid Gainsboro;

    }

    tr,
    td {

        padding: 7px;


    }

    #size {


        border: 1px;
    }
    </style>
