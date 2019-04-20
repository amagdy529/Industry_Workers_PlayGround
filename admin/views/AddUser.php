<?php
require_once "../header.php";

// this is just a temp solution for $_GET issue
if(isset($_GET['id']))
{
   $id = $_GET['id'];
}
else
{
   $id = "";
}

?>


<br> <br>
<div class="container">

    <div class="row" class="table-responsive">
        <form role="form" action="../models/img.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" id="Name" placeholder=" Name" type="text" name="u_name" required>
            </div>
            <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" id="email" placeholder="Email" type="email" name="u_email" required>
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control" id="pass" placeholder="Password" type="password" name="u_pass" required>
                <br>
                <?php
                              

                               if($id==1){

                                  echo "<label id='wpass' style='color:red'>Password and Confirm Password is not Equal</label>";

                                }
                                
                               ?>

            </div>
            <div class="form-group">
                <label class="control-label">Conf Password</label>
                <input class="form-control" id="con-pass" placeholder="Confirm Password" type="password" name="con_pass"
                    required>
            </div>
            <div class="form-group">
                <label class="control-label">Room No</label>
                <input class="form-control" id="room_no" placeholder="Room No" type="text" name="u_room" required>
                <br>
                <?php
                               if($id==2){

                                  echo "<label id='wroom' style='color:red'>It must be number</label>";

                                 }?>

            </div>
            <div class="form-group">
                <label class="control-label">Ext.</label>
                <input class="form-control" id="Ext" placeholder="Ext" type="text" name="ext" required>

                <?php
                               if($id==3){

                                  echo "<label id='wexit' style='color:red'>It must be number</label>";

                                 }?>

            </div>
            <div class="form-group">
                <label class="control-label">Select Image</label>
                <input class="form-control" id="img" type="file" name="pic" required>
            </div>
            <br>
            <button type="submit" class="active btn btn-default btn-lg">Submit</button>
        </form>
    </div>
</div>

<br> <br>

<br> <br>
<div class="footer text-center" background="Black">
    <div class="well">test </div>


    </body>

    </html>