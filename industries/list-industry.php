<?php
require_once "../header.php";
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($global_mysqli, "SELECT * FROM industries ORDER BY industry_no DESC"); // using mysqli_query instead

// print_r($result);

?>

<br> <br> <br> <br>

<div class="container">
    <div class="text-left">
        <h1> All Industries </h1>
    </div>
    <div class="text-left">
        <a href="add-industry.php" class="btn btn-success">
            Add New Industry
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Industry Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            
            echo "<tr>";
            echo "<th scope='row'>".$res['industry_no']."</th>";
            echo "<th>".$res['industry_name']."</th>";
            // echo "<th>".$res['age']."</th>";
            // echo "<th>".$res['email']."</th>";    
            echo "<th><a class='btn btn-primary' href=\"edit-industry.php?id=$res[industry_no]\">Edit</a> </th>";        
            echo "<th><a class='btn btn-danger' href=\"delete-industry-sql.php?id=$res[industry_no]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></th>";
            echo "</tr>";
            

        }
        ?>

        </tbody>
    </table>

</div>