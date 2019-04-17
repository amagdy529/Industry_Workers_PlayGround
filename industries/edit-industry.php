<?php
require_once "../header.php";

//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($global_mysqli, "SELECT * FROM industries WHERE industry_no=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['industry_name'];
    
}

?>

<br> <br> <br> <br>


<div class="container">
    <div class="row" class="table-responsive">
        <form role="form" action="edit-Industry-sql.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label id="industry_name" for="exampleInputEmail1">Industry Name</label>
                <input class="form-control" type="text" name="industry_name" value="<?=$name?>" placeholder="Industry name" required>
                <small id="emailHelp" class="form-text text-muted">enter industry name</small>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <button type="submit" name="update"  class="active btn btn-primary">update</button>
        </form>
    </div>
</div>