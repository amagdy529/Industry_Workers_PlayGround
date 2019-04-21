<?php
// require_once "../header.php";
include "../admin-sidebar.php";

?>

<!-- page-content  -->
<main class="page-content ">
    <div class="text-left">
        <h1> Add New Industry </h1>
    </div>
    <div class="container">
        <div class="row" class="table-responsive">
            <form role="form" action="add-Industry-sql.php" method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <label id="industry_name" for="exampleInputEmail1">Industry Name</label>
                    <input class="form-control" type="text" name="industry_name" placeholder="Industry name" required>
                    <small id="emailHelp" class="form-text text-muted">enter industry name</small>
                </div>
                <button type="submit" class="active btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";