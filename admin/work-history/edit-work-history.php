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
    $desc = $res['wh_desc'];
    $experience = $res['experience'];
    $wh_id = $res['wh_id'];
}

?>

<!-- page-content  -->
<main class="page-content ">

    <div class="text-left">
        <h1> Edit Work History </h1>
    </div>
    <div class="container">
        <div class="row" class="table-responsive">
            <form role="form" action="edit-work-history-sql.php" method="Post" enctype="multipart/form-data">

                <div class="form-group">
                    <label id="desc" for="desc">Description</label>
                    <textarea class="form-control" id="desc" type="textarea" name="desc" value="<?=$desc?>"
                        placeholder="Industry name" required rows=5 cols=75><?=$desc?></textarea>
                    <small id="desc" class="form-text text-muted">enter desc</small>
                </div>
                
                <div class="form-group">
                    <label id="experience" for="experience">Experience</label>
                    <textarea class="form-control" id="experience" type="text" name="experience" value="<?=$experience?>"
                        placeholder="Industry name" required rows=5 cols=75> <?=$experience?></textarea>
                    <small id="experience" class="form-text text-muted">enter experience</small>
                </div>

                <!-- <div class="form-group">
                    <label class="control-label">Select Image</label>
                    <input class="form-control" id="img" type="file" name="pic" >
                </div> -->

                <input type="hidden" name="id" value=<?=$_COOKIE['logged_user_id']?>>
                <input type="hidden" name="wh_id" value=<?=$wh_id?>>

                <button type="submit" name="update" class="active btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";