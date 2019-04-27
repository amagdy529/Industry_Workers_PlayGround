
		<footer class="footer" style="background-image: url('images/footer-bg.png');">
			<div class="inner">
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<img src="images/logo-white.png" alt="constructor" class="footer-logo">
								<p>There ain't nothin' wrong with that. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Here he comes Here comes Speed Racer. He's a demon on wheels. And we know Flipper lives in a world full .</p>
								<div class="footer-social-icons">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
									<a href=""><i class="fa fa-google-plus"></i></a>
								</div> <!-- end .footer-social-icons -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Contact Information</h4>
								<div class="footer-contact clearfix">
									<i class="icon-pointer"></i>
									<div class="content">09 Design Street, Downtown, Sydney, Australia</div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-call-end"></i>
									<div class="content">+01 123 456 78</div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-printer"></i>
									<div class="content">+01 123 456 78</div>
								</div> <!-- end .footer-contact -->
								<div class="footer-contact clearfix">
									<i class="icon-envelope"></i>
									<div class="content">Info@Constructor.com</div>
								</div> <!-- end .footer-contact -->
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Working Hours</h4>
								<div class="footer-hours">Monday To Friday :<br>9:00 AM to 9:00 PM</div>
								<div class="footer-hours">Saturday :<br>9:00 AM to 2:00 PM</div>
								<div class="footer-hours">Sunday :<br>Holiday</div>
							</div> <!-- end .col-sm-3 -->
							<div class="col-sm-3">
								<h4>Our Location</h4>
								<div class="footer-map" id="footer-map"></div>
							</div> <!-- end .col-sm-3 -->
						</div> <!-- end .row -->
						<hr>
					</div> <!-- end .container -->
				</div> <!-- end .top -->
				<div class="bottom">
					<div class="container">
						<span>Copyright © 2017 - All Rights Reserved</span>

						<div id="back-to-top">
				          <a href="#top">go to Top <i class="fa fa-caret-up"></i></a>
				        </div>
				        <div class="clear"></div>
			        </div>
				</div> <!-- end .bottom -->
			</div> <!-- end .inner -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg'></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.countTo.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>
	     <!-- jQuery KenBurn Slider  -->
	    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				var api = tpj('.fullwidthbanner').revolution(
					{
						delay:8000,
						startwidth:1170,
						startheight:500,

						onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"center",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset: 40,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:10,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:10,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",

						shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


					// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
					// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
						api.bind("revolution.slide.onloaded",function (e) {


							jQuery('.tparrows').each(function() {
								var arrows=jQuery(this);

								var timer = setInterval(function() {

									if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
									  arrows.fadeOut(300);
								},3000);
							})

							jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
								jQuery('.tp-simpleresponsive').addClass("mouseisover");
								jQuery('body').find('.tparrows').each(function() {
									jQuery(this).fadeIn(300);
								});
							}, function() {
								if (!jQuery(this).hasClass("tparrows"))
									jQuery('.tp-simpleresponsive').removeClass("mouseisover");
							})
						});
					// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
				});
		</script>
	</body>
</html>


