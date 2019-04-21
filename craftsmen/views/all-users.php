<?php
require_once "../header.php";
?>

<br> <br> <br> <br>


<div class="col-sm-11">
    <h1> All Users </h1>
</div>
<div class="col-sm-1">
    <a href="AddUser.php">Add user</a>
</div>

<br> <br> <br> <br>

<div class="col-sm-12 table-responsive">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Name</th>
                <th>industry_no</th>
                <th>image</th>
                <th>Ext.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

      <?php

        require_once "../controllers/DbConnection.php";
        require_once "../controllers/user.php";
        $pro = new user(DbConnection::getConnection());
        $result = $pro->dispaly_users();
        // print_r($result);die;
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {    
          echo '<tr>
               <td>'.$row["u_name"].'</td>
               <td>'.$row["industry_no"].'</td>';
          echo "<td><img src='../assets/img/".$row['u_img']."' width='30' height='30'/></td>";
          echo  '<td>'.$row["ext"].'</td>
                 <td><a href="../views/edituser1.php?id='.$row['u_id'].'">Edit</a> 
                 <a href="../models/deleteuser.php?id='.$row['u_id'].'">Delete</a></td>
          </tr>';
        }  
      }  
      else 
      {
          echo "0 results";
      }

    ?>

        </tbody>
        </form>
    </table>
</div>

<br> <br> <br> <br>

</body>

</html>