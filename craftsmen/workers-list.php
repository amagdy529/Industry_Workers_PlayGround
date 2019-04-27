<?php
include "front-header.php";
include "config.php";

$uploads_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/uploads";
$craftsmen_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/craftsmen/";

$result = mysqli_query($global_mysqli, "SELECT * FROM users Where user_type=2 ORDER BY u_id DESC"); // using mysqli_query instead

?>


<div class="section white">
    <div class="inner">
        <div class="container">
            <div id="portfolio-details" class="portfolio-details">
                <div class="portfolio-sizer"></div>
                <!-- <div class="row"> -->

                <?php
					while($res = mysqli_fetch_array($result)) {    
                    // print_r($res);
                    $industry = mysqli_query($global_mysqli, "SELECT * FROM industries  Where industry_no=".$res["industry_no"]." "); // using mysqli_query instead
                    $industry_fetched = mysqli_fetch_array($industry);
                    				
                ?>

                <!-- start item -->
                <div class="item ">
                    <div class="image img-dev">
                        <img src="<?=$uploads_url.'/'.$res['u_img']?>" alt="alt text" class="imgx img-responsive"
                            width="350" height="300">
                        <div class="overlay">
                            <div class="inner">
                                <a href="" class="open-AddWorkerDialog link" data-toggle="modal"
                                    data-id="<?=$res['u_id']?>" data-target="#exampleModal"><i
                                        class="fa fa-link"></i></a>
                                <a href="<?=$uploads_url.'/'.$res['u_img']?>" class="zoom popupzoom"><i
                                        class="fa fa-search"></i></a>
                            </div> <!-- end .inner -->

                        </div> <!-- end .overlay -->
                    </div> <!-- end .image -->
                    <div class="details">
                        <h6><?=$res['u_name']?></h6>
                        <span><?=$industry_fetched['industry_name'] ?></span>
                    </div> <!-- end .details -->
                </div> <!-- end .item -->



                <?php } ?>
                <!-- </div> -->
            </div> <!-- end .portfolio-details -->
            <!-- <div class="portfolio-load-more"><a href="" class="button">Load More</a></div> -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php
            // print_r($_SESSION);
            if(isset($_SESSION['u_id'])){
            //   echo $_SESSION['u_id'];
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request Worker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="requests/add-request-sql.php" method="Post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label id="request_desc" for="exampleInputEmail1">Request description</label>
                        <input class="form-control" type="text" name="request_desc" placeholder="request details" required>
                        
                        <small id="emailHelp" class="form-text text-muted">enter your request</small>
                    </div>
                    <input type="hidden" name="requester_id" value=<?=$_SESSION['u_id'];?>>
                    <input type="hidden" name="request_date" value=<?= date("Y-m-d")?>>
                    <input type="hidden" name="workerId" id="workerId" value="" />
                    <!-- <button type="submit" class="active btn btn-primary">Submit</button> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Request Worker</button>
            </div>
            </form>

            <?php 
            // else is not logged in . user need to login in order to make a request
            }else{ 
            ?>

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" action="<?=$craftsmen_url?>models/login.php" method="post">
                    <h3 class="text-center login-title">U Must Login To Request Worker</h3>
                    <input type="email" class="form-control" placeholder="Email" name="email" required autofocus />
                    <br />
                    <input type="password" class="form-control" placeholder="Password" name="password" required />
                    <br />
                    <!-- <label style="color:red">your email or Password is wrong</label> -->
                    <!-- <br> -->
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in
                    </button>



                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?php }?>
        </div>
    </div>
</div>




<script>
$(document).on("click", ".open-AddWorkerDialog", function() {
    var myworkerId = $(this).data('id');
    console.log("the worker id is -> ");
    console.log(myworkerId);
    $(".modal-body #workerId").val(myworkerId);
    // As pointed out in comments, 
    // it is unnecessary to have to manually call the modal.
    // $('#addBookDialog').modal('show');
});
</script>

<?php
include "front-footer.php";