<<?php
require_once "../header.php";

//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($global_mysqli, "SELECT * FROM users WHERE u_id=$id");

print_r($result);
// u_name,u_email,u_password,industry_no,user_type,u_img

while($res = mysqli_fetch_array($result))
{
    $name = $res['u_name'];
    $email = $res['u_email'];
    $password = $res['u_password'];
    $industry_no = $res['industry_no'];
    $user_type = $res['user_type'];
    $user_img_name = $res['u_img'];
    
}

?>

<div class="container">
    <div class="row" class="table-responsive">
        <form role="form" action="edit-user-sql.php" method="Post" enctype="multipart/form-data">

            <div class="form-group">
                <label id="username" for="username">Username</label>
                <input class="form-control" id="username" type="text" name="username" value="<?=$name?>" placeholder="Industry name" required>
                <small id="username" class="form-text text-muted">enter username</small>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?=$email?>" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?=$password?>" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">enter password</small>
            </div>

            <div class="form-group">
                <label for="industry">Industry</label>
                <select id="industry" name="industry" class="form-control" value="<?=$industry_no?>" >
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
                <small id="emailHelp" class="form-text text-muted">choose industry</small>
            </div>
            
            <div class="form-group">
                <label for="user_type">User Type</label>
                <select id="user_type" name="user_type" value="<?=$user_type?>" class="form-control">
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