<?php
// require_once "../header.php";
include "../admin-sidebar.php";
// include_once("../config.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
// $result = mysqli_query($global_mysqli, "SELECT * FROM users ORDER BY u_id DESC"); // using mysqli_query instead
$result = mysqli_query($global_mysqli, "SELECT * FROM requests Where worker_id = " .$_COOKIE['logged_user_id']." ORDER BY request_id DESC "); // using mysqli_query instead

// print_r($_COOKIE['logged_user_type']);
// print_r($_COOKIE['logged_user_id']);
// print_r(mysqli_fetch_array($result));
// print_r($result);
// die;
?>

<!-- page-content  -->
<main class="page-content ">
            
    
    <div class="container">
    <div class="text-left">
        <h1> All Requests </h1>
    </div>
    <!-- <div class="text-left">
        <a href="add-user.php" class="btn btn-success">
            Add New User
            <span class="fa fa-plus"></span>
        </a>
    </div> -->
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">requester Name</th>
                <th scope="col">Worker Name</th>
                <th scope="col">Date</th>
                <th scope="col">Desc</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        // u_name,u_email,u_password,industry_no,user_type,u_img
        while($res = mysqli_fetch_array($result)) { 
            // print_r($res);  
             
            $requester_array = mysqli_query($global_mysqli, "SELECT * FROM users where u_id =". $res['requester_id'] ); // using mysqli_query      
            $requester = mysqli_fetch_array($requester_array);
            // print_r($requester);
            
            echo "<tr>";
            echo "<th scope='row'>".$res['request_id']."</th>";
            // echo "<th>".$res['u_name']."</th>";
            echo "<th>".$requester['u_name']."</th>";
            echo "<th>".$global_logged_in_user['u_name']."</th>";
            echo "<th>".$res['date']."</th>";
            echo "<th>".$res['desc']."</th>";
            
            
            // echo "<th>".$res['email']."</th>";    
            // echo "<th><a class='btn btn-primary' href=\"edit-user.php?id=$res[u_id]\">Edit</a> </th>";        
            // echo "<th><a class='btn btn-danger' href=\"delete-user-sql.php?id=$res[u_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></th>";
            // echo "</tr>";
            
            
        }
        ?>

</tbody>
</table>

</div>

</main>
<!-- page-content" -->
<?php

include "../admin-footer.php";