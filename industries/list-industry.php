<?php
require_once "../header.php";
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($global_mysqli, "SELECT * FROM industries ORDER BY industry_no DESC"); // using mysqli_query instead

print_r($result);

?>

<br> <br> <br> <br>

<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            
            echo "<tr>";
            echo "<th scope='row'>".$res['industry_no']."</th>";
            echo "<td>".$res['industry_name']."</td>";
            // echo "<td>".$res['age']."</td>";
            // echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[industry_no]\">Edit</a> </td>";        
            echo "<td> <a href=\"delete.php?id=$res[industry_no]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>

        </tbody>
    </table>

</div>