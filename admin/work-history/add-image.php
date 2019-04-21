<?php
// require_once "../header.php";
include "../admin-sidebar.php";

//getting id from url
$id = $_COOKIE['logged_user_id'];
 
//selecting data associated with this particular id
$result = mysqli_query($global_mysqli, "SELECT * FROM work_history WHERE worker_id = $id");


// print_r($result);
// u_name,u_email,u_password,industry_no,user_type,u_img

while($res = mysqli_fetch_array($result))
{
    // $desc = $res['wh_desc'];
    // $experience = $res['experience'];
    $wh_id = $res['wh_id'];
}


?>


<!-- page-content  -->
<main class="page-content ">
    <div class="text-left">
        <h1> Add New Image </h1>
    </div>
    <div class="container">
        <div class="row" class="table-responsive">
            <form role="form" action="add-image-sql.php" method="Post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label">Select Image</label>
                    <input class="form-control" id="img" type="file" name="pic" required>
                </div>
                <input type="hidden" name="id" value=<?=$_COOKIE['logged_user_id']?>>
                <input type="hidden" name="wh_id" value=<?=$wh_id?>>


                <button type="submit" class="active btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";