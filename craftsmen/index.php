<?php
include "front-header.php";
include "config.php";

$uploads_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/uploads";
$craftsmen_url = "http://" . $_SERVER['SERVER_NAME'] . "//" ."Industry_Workers_PlayGround/craftsmen/";

$result = mysqli_query($global_mysqli, "SELECT * FROM users Where user_type=2 ORDER BY u_id DESC"); // using mysqli_query instead

// print_r($_SESSION['u_id']);die;
?>





		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- slider 
			================================================== -->
		<div id="slider" class="revolution-slider">
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->

			<div class="fullwidthbanner-container">
				<div class="fullwidthbanner">
					<ul>
						<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
							<img src="images/slider.jpg" data-fullwidthcentering="on" alt="slide">

							<!-- THE CAPTIONS IN THIS SLDIE -->
							<div class="caption large_text randomrotate"
								 data-x="50"
								 data-y="100"
								 data-speed="100"
								 data-start="1200"
								 data-easing="easeOutExpo" >
								 The Best Woodfactory<br>
								 of All Time
							 </div>

							 <div class="caption modern_medium_fat_white lfl"
								 data-x="50"
								 data-y="215"
								 data-speed="300"
								 data-start="1600"
								 data-easing="easeOutExpo">
								 <span>Perfect Furniture Design</span>
							</div>

							 <div class="caption modern_small_text_dark lfb"
								 data-x="50"
								 data-y="250"
								 data-speed="500"
								 data-start="2000"
								 data-easing="easeOutExpo">
								 Craftsman Template will help you<br>
								 grow your business.
							</div>

							 <div class="caption modern_small_text_dark lfb stt"
								 data-x="50"
								 data-y="320"
								 data-speed="600"
								 data-start="2300"
								 data-easing="easeOutExpo">
								 <a href="#" class="purchase">Buy it Now</a>
							</div>

							<div class="caption lft" 
								data-x="680" 
								data-y="70" 
								data-speed="300" 
								data-start="2700" 
								data-easing="easeOutExpo">
								<img src="images/man.png" alt="Image">
							</div>

							

						</li>

						<!-- THE Second SLIDE -->
						<li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
							<img src="images/slider2.jpg" data-fullwidthcentering="on" alt="slide">

							<!-- THE CAPTIONS IN THIS SLDIE -->
							<div class="caption big_white randomrotate"
								 data-x="center"
								 data-y="130"
								 data-speed="100"
								 data-start="1200"
								 data-easing="easeOutExpo" >
								 DESIGN - QUALITY - EXPERIENCE
							 </div>

							 <div class="caption lft" 
								data-x="center" 
								data-y="220" 
								data-speed="200" 
								data-start="1700" 
								data-easing="easeOutExpo">
								<div class="border"></div>
							</div>

							<!-- THE CAPTIONS IN THIS SLDIE -->
							<div class="caption small_text lfb stt"
								 data-x="center"
								 data-y="250"
								 data-speed="300"
								 data-start="2000"
								 data-easing="easeOutExpo" >
								 We create beautiful art from Woodwork
							 </div>
							 

							 <div class="caption modern_small_text_dark lfb"
								 data-x="center"
								 data-y="310"
								 data-speed="600"
								 data-start="2600"
								 data-easing="easeOutExpo">
								 <a href="#" class="purchase">Buy it Now</a>
							</div>
					

							

						</li>

						<!-- THE THIRD SLIDE -->
						<li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
							<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
							<img src="images/slider3.jpg" data-fullwidthcentering="on" alt="slide">

							<!-- THE CAPTIONS IN THIS SLDIE -->
							<div class="caption large_text randomrotate"
								 data-x="50"
								 data-y="100"
								 data-speed="100"
								 data-start="1200"
								 data-easing="easeOutExpo" >
								 Craftsman<br>
								 Easy to Use Carpentry Template
							 </div>

							 <div class="caption modern_medium_fat_white lfl"
								 data-x="50"
								 data-y="215"
								 data-speed="300"
								 data-start="1600"
								 data-easing="easeOutExpo">
								 <span>Amaze your customers</span>
							</div>

							 <div class="caption modern_small_text_dark lfb"
								 data-x="50"
								 data-y="250"
								 data-speed="500"
								 data-start="2000"
								 data-easing="easeOutExpo">
								 Create your site in seconds.<br>
								 Best Template for Carpentry/Woodwork.
							</div>

							 <div class="caption modern_small_text_dark lfb stt"
								 data-x="50"
								 data-y="340"
								 data-speed="600"
								 data-start="2300"
								 data-easing="easeOutExpo">
								 <a href="#" class="purchase">Buy it Now</a>
							</div>

							<div class="caption lft" 
								data-x="680" 
								data-y="60" 
								data-speed="300" 
								data-start="2700" 
								data-easing="easeOutExpo">
								<img src="images/phone.png" alt="Image">
							</div>

							

						</li>


					</ul>
				</div>
			</div>
		</div>
		<!-- End slider -->

		<div class="section white">
			<div class="inner welcome">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h2><small>Welcome to Craftsman</small>Who We Are</h2>
							<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure odio praesentium sed dignissimos atque enim dolorum assumenda eos vitae, mollitia rem, nam laborum expedita. Natus sint atque possimus similique recusandae consectetur suscipit delectus dolore iure numquam, placeat voluptatem, consequuntur alias officiis vero itaque nesciunt fuga ratione eum deserunt dicta molestias sit excepturi. imus error? Voluptatem?</p>
							<ul class="list">
								<li><i class="fa fa-check-circle"></i> Professional Staff</li>
								<li><i class="fa fa-check-circle"></i> Latest Mechanichal Technology</li>
								<li><i class="fa fa-check-circle"></i> Certified Materials</li>
								<li><i class="fa fa-check-circle"></i> Very Cheap Prices</li>
								<li><i class="fa fa-check-circle"></i> Creative Designers</li>
								<li><i class="fa fa-check-circle"></i> Finishing Work Before Deadline</li>
							</ul>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-4 clearfix">
							<div class="quickquote">
								<form action="scripts/contact.php" method="post" id="contact-form">
									<fieldset>
										<legend>request a Quote</legend>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">													
													<input type="text" id="contact-name" name="contact-name" placeholder="Your Name" required>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
											<div class="col-sm-12">
												<div class="form-group">													
													<input type="email" id="contact-email" name="contact-email" placeholder="Your Email" required>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
											<div class="col-sm-12">
												<div class="form-group">													
													<textarea name="contact-message" id="contact-message" placeholder="Your Message " required rows="3"></textarea>
												</div> <!-- end .form-group -->
											</div> <!-- end .col-sm-12 -->
										</div> <!-- end .row -->
									</fieldset>
									<button type="submit" class="button">Send Message</button>
									<div id="contact-loading" class="alert alert-info form-alert">
										<span class="message">Loading...</span>
									</div>
									<div id="contact-success" class="alert alert-success form-alert">
										<span class="message">Success!</span>
									</div>
									<div id="contact-error" class="alert alert-danger form-alert">
										<span class="message">Error!</span>
									</div>
								</form>
							</div>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="calltoaction">
			<div class="container ">
				<p class="content">
					<i class="featured-icon et-line icon-layers "></i> WE OFFER A WIDE SECTION OF WOODWORK SERVICES
				</p>

				<a class="cmo-button medium " href="#"><span>PURCHASE NOW</span></a>

			</div>
		</div>

		<div class="serv-section">
			<div class="container">
				<h2><small>Hand Crafting</small>Services</h2>
				<div class="row">
		            <div class="col-sm-3">
	                    <div class="wpb_single_image vc_align_left"><a href="#">
	                       <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="400" src="images/img01.jpg" class="vc_single_image-img attachment-large" alt="img04"></div>
	                    </a></div>
	                    <div class="serv-item">
	                        <a href="#"><h2>EXTERIOR DESIGN</h2></a>
	                     </div>
	                    <div class="serv-desc">
	                        
	                            <p>Showcase you style oursite home with inspiration from these exteior paint color schemes. Send us a drawing and we respond with a quote.</p>

	                    </div>
		            </div>
		            <div class="col-sm-3">
	                    <div class="wpb_single_image vc_align_left"><a href="#">
	                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="400" src="images/img02.jpg" class="vc_single_image-img attachment-large" alt="img05"></div>
	                    </a></div>
	                    <div class="serv-item">
	                        <a href="#"><h2>OFFICE FURNITURE</h2></a>
	                    </div>
	                    <div class="serv-desc">
	                        
	                            <p>A new furniture typology for open spaces. our product range is a new haven in the office- for employees, clients and visitors alike.</p>

	                    </div>
		            </div>
		            <div class="col-sm-3">
	                    <div class="wpb_single_image vc_align_left"><a href="#">
	                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="400" src="images/img03.jpg" class="vc_single_image-img attachment-large" alt="img06"></div>
	                    </a></div>
	                    <div class="serv-item">
	                        <a href="#"><h2>FAMILY FURNITURE</h2></a>
	                    </div>
	                    <div class="serv-desc">
	                        
	                            <p>Family room is the place to gather together with those you love. We make your hourse becomes your warm home with the spectacular furniture.</p>

	                    </div>
		            </div>
		            <div class="col-sm-3">
	                    <div class="wpb_single_image vc_align_left"><a href="#">
	                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="400" src="images/img04.jpg" class="vc_single_image-img attachment-large" alt="img06"></div>
	                    </a></div>
	                    <div class="serv-item">
	                        <a href="#"><h2>LAMINATE WORKS</h2></a>
	                    </div>
	                    <div class="serv-desc">
	                        
	                            <p>Family room is the place to gather together with those you love. We make your hourse becomes your warm home with the spectacular furniture.</p>

	                    </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- End Section Serv -->

		<div class="split-section portfoliosection">
			<div class="container">
				<div class="inner">
					<div class="portfoliofilter ">
						<div class="inner clearfix">
							<div id="portfolio-thirds-filters" class="portfolio-filters-box">
								<h1>Our Work</h1>
								<button class="active" data-filter="*">All</button>
								<button data-filter=".class1">Design</button>
								<button data-filter=".class2">Interior</button>
								<button data-filter=".class3">Laminate Flooring</button>
								<button data-filter=".class4">House Furniture</button>
								<button data-filter=".class5">Wood Art</button>
							</div> <!-- end .portfolio-filters-box -->
						</div> <!-- end .inner -->
					</div> <!-- end .split-section-section -->
					<div class="portfolioimages">
						<div class="inner">
							<div id="portfolio-thirds" class="portfolio-thirds">
								<div class="portfolio-sizer"></div>

								<div class="item class1 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio01.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio01.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

								<div class="item class2 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio02.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio02.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

								<div class="item class3 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio03.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio03.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

								<div class="item class4 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio04.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio04.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

								<div class="item class5 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio05.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio05.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

								<div class="item class1 cmo-portfolio-featured-image-bg" style="background-image: url('images/portfolio06.png');">
									<div class="cmo-pfi-hover">
										<div class="cmo-pfi-hover-inner">
											<a href="images/portfolio06.png" title="Building at night" class="cmo-pfi-external-link zoom popupzoom">
											<i class="fa fa-search-plus"></i>
											</a>
											<h3><a href="#">Building at night</a></h3>
											<div>
												<a href="#" rel="tag">apartment</a>, <a href="../portfolio_tags/architecture/index.htm" rel="tag">architecture</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Item -->

							</div> <!-- end .portfolio-thirds -->
						</div> <!-- end .inner -->
					</div> <!-- end .split-section-section -->
				</div> <!-- end .inner -->
				<div class="small no-padding-bottom white text-center">
					<div class="inner">
						<div class="container">
							<a href="" class="button mt40">View All Our Works</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .section -->
			</div>


		</div> <!-- end .split-section -->

		<div class="section white no-padding-bottom">
			<div class="inner">
				<div class="container">
					<div class="row aligned-cols">
						<div class="col-sm-8">
							<h2><small>Features</small>Why Choose Us</h2>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading active" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="constructor-wrench"></i>35 Years Of Experience In Woodwork Business
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<p>Groovin' all week with you. And we'll do it our way yes our way. Make all our dreams come true for me and you. You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. It's time to play the music. </p>
											<p>Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. Here's the story of a lovely lady who was bringing </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="constructor-wrench-gear"></i>More than 1000 Customers
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>Groovin' all week with you. And we'll do it our way yes our way. Make all our dreams come true for me and you. You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. It's time to play the music. </p>
											<p>Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. Here's the story of a lovely lady who was bringing </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="constructor-wrench-box"></i>Using Latest Technology In Our Work
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<p>Groovin' all week with you. And we'll do it our way yes our way. Make all our dreams come true for me and you. You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. It's time to play the music. </p>
											<p>Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. Here's the story of a lovely lady who was bringing </p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- end .col-sm-8 -->
						<div class="col-sm-4 aligned-bottom">
							<img src="images/man.png" alt="man" class="img-responsive">
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="section projects">
			<div class="container">
				<div class="statistic-box">
					<div class="row">
						<div class="col-md-3">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-thumbs-up"></i>
									<p><span class="timer" data-from="0" data-to="120"></span></p>
									<p>Happy clients</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-space-shuttle"></i>
									<p><span class="timer" data-from="0" data-to="213"></span></p>
									<p>Projects done</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-users"></i>
									<p><span class="timer" data-from="0" data-to="72"></span></p>
									<p>Professional Staff</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="statistic-post">
								<div class="statistic-counter">
									<i class="fa fa-star"></i>
									<p><span class="timer" data-from="0" data-to="35"></span></p>
									<p>Award Won</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section white blogmain">
			<div class="inner">
				<div class="container">
					<h2><small>Blog</small>Company News</h2>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="blog-post">
								<a href=""><img src="images/blog-post01.png" alt="alt text" class="img-responsive center-block"></a>
								<div class="content">
									<div class="blog-icon"><i class="icon-picture"></i></div>
									<div class="blog-post-header">
										<h6><a href="">mountain might get ‘em but the law</a></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i>July 10, 2015</li>
											<li><i class="icon-speech"></i>10 Comments</li>
										</ul>
									</div> <!-- end .blog-post-header -->
									<p>This is what we call the Muppet Show. As long as we live its you and me baby. There ain't nothin' wrong with that. Straightnin' the curves. </p>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="blog-post">
								<a href=""><img src="images/blog-post05.png" alt="alt text" class="img-responsive center-block"></a>
								<div class="content">
									<div class="blog-icon"><i class="icon-picture"></i></div>
									<div class="blog-post-header">
										<h6><a href="">most celebrational Muppetational</a></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i>July 10, 2015</li>
											<li><i class="icon-speech"></i>13 Comments</li>
										</ul>
									</div> <!-- end .blog-post-header -->
									<p>Town to town and up and down the dial. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly. </p>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="blog-post">
								<a href=""><img src="images/blog-post03.png" alt="alt text" class="img-responsive center-block"></a>
								<div class="content">
									<div class="blog-icon"><i class="fa fa-film"></i></div>
									<div class="blog-post-header">
										<h6><a href="">east side to a deluxe apartment</a></h6>
										<ul class="list-inline">
											<li><i class="icon-calendar"></i>July 09, 2015</li>
											<li><i class="icon-speech"></i>09 Comments</li>
										</ul>
									</div> <!-- end .blog-post-header -->
									<p>Today still wanted by the government they survive as soldiers of fortune? That this group would somehow form a family Brady Bunch. </p>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-sm-4 -->
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section brown">
			<div class="inner">
				<div class="container">
					<h2><small>Testimonials</small>What Our CLients Say</h2>
					<div class="testimonial-slider owl-carousel">
						<div class="testimonial">
							<div class="quote">Mountaineer barely kept his family fed. Well the first thing you know ol' Jeds a millionaire. said Jed move away from there.</div>
							<div class="author">
								<div class="image"><img src="images/testimonial2.png" alt="Chris Evans" class="img-responsive"></div>
								<h6>Hendric Zik</h6>
								<span>Sydney, Australia</span>
							</div> <!-- end .author -->
						</div> <!-- end .testimonial -->
						<div class="testimonial">
							<div class="quote">Mountaineer barely kept his family fed. Well the first thing you know ol' Jeds a millionaire. said Jed move away from there.</div>
							<div class="author">
								<div class="image"><img src="images/testimonial3.png" alt="Chris Evans" class="img-responsive"></div>
								<h6>Mike Hizu</h6>
								<span>Sydney, Australia</span>
							</div> <!-- end .author -->
						</div> <!-- end .testimonial -->
						<div class="testimonial">
							<div class="quote">Mountaineer barely kept his family fed. Well the first thing you know ol' Jeds a millionaire. said Jed move away from there.</div>
							<div class="author">
								<div class="image"><img src="images/testimonial1.png" alt="Chris Evans" class="img-responsive"></div>
								<h6>Chris Evans</h6>
								<span>Sydney, Australia</span>
							</div> <!-- end .author -->
						</div> <!-- end .testimonial -->
					</div> <!-- end .testimonial-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->





		<div class="section white small">
			<div class="inner">
				<div class="container">
					<div class="clients">
						<div class="row">
							<div class="col-md-2">
								<a href="#"><img src="images/c1.png" alt="client"></a>
							</div>	
							<div class="col-md-2">
								<a href="#"><img src="images/c2.png" alt="client"></a>
							</div>	
							<div class="col-md-2">
								<a href="#"><img src="images/c3.png" alt="client"></a>
							</div>	
							<div class="col-md-2">
								<a href="#"><img src="images/c4.png" alt="client"></a>
							</div>	
							<div class="col-md-2">
								<a href="#"><img src="images/c5.png" alt="client"></a>
							</div>	
							<div class="col-md-2">
								<a href="#"><img src="images/c1.png" alt="client"></a>
							</div>	
						</div>
						
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->



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






<?php 
// include "index-body.php";

// include "front-footer.php";