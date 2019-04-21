<?php
require_once "../header.php";
// include "../admin-sidebar.php";

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $desc = $_POST['desc'];
    $experience = $_POST['experience'];
    $wh_id = $_POST['wh_id'];
    print_r($id);
    print_r($_POST);
    $desc_var = 'desc';
    // die;
    // $name=$_POST['industry_name'];

    // checking empty fields
    if(empty($desc)) {            
        if(empty($desc)) {
            echo "<font color='red'>desc field is empty.</font><br/>";
        }
    } else {    
        //updating the table
        $result = mysqli_query($global_mysqli, "UPDATE work_history SET wh_desc='$desc', experience='$experience' WHERE worker_id=$id AND wh_id=$wh_id");
        
        // die;
        //redirectig to the display page. In our case, it is index.php
        header('Location:edit-work-history.php');
    }
}
?>