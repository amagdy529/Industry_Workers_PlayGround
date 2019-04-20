<?php
include "../admin-sidebar.php";
?>
<!-- page-content  -->
<main class="page-content pt-2">
    <div id="overlay" class="overlay"></div>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="form-group col-md-12">
                <h2>Sidebar template</h2>
                <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>

            </div>
            <div class="form-group col-md-12">
                <!-- <a id="toggle-sidebar" class="btn btn-dark" href="#">
                    <span>Toggle Sidebar</span>
                </a> -->
                <a id="pin-sidebar" class="btn btn-dark" href="#">
                    <span>Pin Sidebar</span>
                </a>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-md-12">
                <h3>Themes</h3>
                <p>Here are more themes that you can use</p>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
                <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
                <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
                <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                <a href="#" data-theme="light-theme" class="theme light-theme"></a>
            </div>
            <div class="form-group col-md-12">
                <p>You can also use background image </p>
            </div>
            <div class="form-group col-md-12">
                <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                <a href="#" data-bg="bg4" class="theme theme-bg"></a>
            </div>
            <div class="form-group col-md-12">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="toggle-bg" checked>
                    <label class="custom-control-label" for="toggle-bg">Background image</label>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="toggle-border-radius">
                    <label class="custom-control-label" for="toggle-border-radius">Border radius</label>
                </div>
            </div>

        </div>

        
    </div>
</main>
<!-- page-content" -->

<?php
include "../admin-footer.php";
?>