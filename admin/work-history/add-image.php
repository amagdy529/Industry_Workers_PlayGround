<?php
// require_once "../header.php";
include "../admin-sidebar.php";

$industries_array = mysqli_query($global_mysqli, "SELECT * FROM industries" ); // using mysqli_query instead     
$industries_array_fetched = mysqli_fetch_array($industries_array);
// print_r($industries_array);

// while($res = mysqli_fetch_array($industries_array)) {    
// print_r($res['industry_no']);
// }
// die;
// foreach ($industries_array as $key => $value) {
//     # code...
//     // print_r($key);
//     print_r("<br>");
//     print_r($value);
//     print_r("<br>");
// }
// die;
?>


<!-- page-content  -->
<main class="page-content ">
    <div class="text-left">
        <h1> Add New User </h1>
    </div>
    <div class="container">
        <div class="row" class="table-responsive">
            <form role="form" action="add-user-sql.php" method="Post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label">Select Image</label>
                    <input class="form-control" id="img" type="file" name="pic" required>
                </div>
                <input type="hidden" name="id" value=<?=$_COOKIE['logged_user_id']?>>

                <button type="submit" class="active btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";