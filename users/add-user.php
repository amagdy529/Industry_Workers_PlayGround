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
        <h1> Add User </h1>
    </div>
    <div class="container">
        <div class="row" class="table-responsive">
            <form role="form" action="add-user-sql.php" method="Post" enctype="multipart/form-data">

                <div class="form-group">
                    <label id="username" for="username">Username</label>
                    <input class="form-control" id="username" type="text" name="username" placeholder="User name"
                        required>
                    <small id="username" class="form-text text-muted">enter username</small>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <small id="emailHelp" class="form-text text-muted">enter password</small>
                </div>

                <div class="form-group">
                    <label for="industry">Industry</label>
                    <select id="industry" name="industry" class="form-control">
                        <?php
                            foreach ($industries_array as $key => $value) {
                        ?>
                                <option value="<?=$value['industry_no']?>"><?=$value['industry_name'] ?></option>
                        <?php    
                            }
                        ?>
                        
                    </select>
                    <small id="emailHelp" class="form-text text-muted">choose industry</small>
                </div>

                <div class="form-group">
                    <label for="user_type">User Type</label>
                    <select id="user_type" name="user_type" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Worker</option>
                        <option value="3">User</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">choose user type</small>
                </div>

                <div class="form-group">
                    <label class="control-label">Select Image</label>
                    <input class="form-control" id="img" type="file" name="pic" required>
                </div>


                <button type="submit" class="active btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";