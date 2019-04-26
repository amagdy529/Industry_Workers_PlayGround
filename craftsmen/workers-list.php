<?php
include "front-header.php";
include "config.php";

$uploads_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/uploads";

$result = mysqli_query($global_mysqli, "SELECT * FROM users Where user_type=2 ORDER BY u_id DESC"); // using mysqli_query instead

// print_r($result);


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
					?>

                <!-- start item -->
                <div class="item ">
                    <div class="image">
                        <img src="<?=$uploads_url.'/'.$res['u_img']?>" alt="alt text" class="img-responsives"
                            width="350" height="300">
                        <div class="overlay">
                            <div class="inner">
                                <a href="" class="link" data-toggle="modal" data-target="#exampleModal"><i
                                        class="fa fa-link"></i></a>
                                <a href="images/team1.png" class="zoom popupzoom"><i class="fa fa-search"></i></a>
                            </div> <!-- end .inner -->

                        </div> <!-- end .overlay -->
                    </div> <!-- end .image -->
                    <div class="details">
                        <h6><?=$res['u_name']?></h6>
                        <span>Houses</span>
                    </div> <!-- end .details -->
                </div> <!-- end .item -->



                <?php } ?>
                <!-- </div> -->
            </div> <!-- end .portfolio-details -->
            <div class="portfolio-load-more"><a href="" class="button">Load More</a></div>
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ... Heloo World
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php
include "front-footer.php";