<?php
// require_once "../header.php";
include "../admin-sidebar.html";

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($global_mysqli, "SELECT * FROM users ORDER BY u_id DESC"); // using mysqli_query instead

print_r($result);

?>

<div class="container">
    <div class="text-left">
        <h1> All Users </h1>
    </div>
    <div class="text-left">
        <a href="add-user.php" class="btn btn-success">
            Add New User
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
                <th scope="col">Industry Name</th>
                <th scope="col">User Type</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        // u_name,u_email,u_password,industry_no,user_type,u_img
        while($res = mysqli_fetch_array($result)) {    
            $industry_name_array = mysqli_query($global_mysqli, "SELECT * FROM industries where industry_no =". $res['industry_no'] ); // using mysqli_query instead     
            $industry_name = mysqli_fetch_array($industry_name_array);
            echo "<tr>";
            echo "<th scope='row'>".$res['u_id']."</th>";
            echo "<th>".$res['u_name']."</th>";
            echo "<th>".$industry_name['industry_name']."</th>";
            if ($res['user_type'] == 1) {
                echo "<th>".'Admin'."</th>";
            } elseif ($res['user_type'] == 2) {
                echo "<th>".'Worker'."</th>";
            } elseif($res['user_type'] == 3){
                echo "<th>".'User'."</th>";
            }
            
            // echo "<th>".$res['email']."</th>";    
            echo "<th><a class='btn btn-primary' href=\"edit-user.php?id=$res[u_id]\">Edit</a> </th>";        
            echo "<th><a class='btn btn-danger' href=\"delete-user-sql.php?id=$res[u_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></th>";
            echo "</tr>";
            
            
        }
        ?>

</tbody>
</table>

</div>

<?php
include "../admin-sidebar.html";