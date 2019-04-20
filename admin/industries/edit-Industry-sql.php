<?php
require_once "../header.php";
// include "../admin-sidebar.php";

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    print_r($id);
    $name=$_POST['industry_name'];

    // checking empty fields
    if(empty($name)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $result = mysqli_query($global_mysqli, "UPDATE industries SET industry_name='$name' WHERE industry_no=$id");
        // die;
        //redirectig to the display page. In our case, it is index.php
        header('Location:list-industry.php');
    }
}
?>