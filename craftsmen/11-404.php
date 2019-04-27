<?php
include "front-header.php";
?>
<div class="responsive-menu">
    <a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

<div class="page-title" style="background-image: url('images/background03.png');">
    <div class="inner">
        <h1>404 Error Page</h1>
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<div class="section white text-center">
    <div class="inner">
        <div class="container">
            <div class="page-not-found">
                <h1>Oops, This Page Could Not Be Found!</h1>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily
                    unavailable.</p>
                <img src="images/404.png" alt="404" class="img-responsive center-block">
            </div> <!-- end .page-not-found -->
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form class="search-form">
                        <input type="search" placeholder="Search" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<?php
include "front-footer.php";