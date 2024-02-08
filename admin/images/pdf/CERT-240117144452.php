<?php require 'config7.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educone Is Online Courses HTML5 Template.">
    <meta name="keywords" content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

    <!-- SITE TITLE -->
    <title>Examinares</title>
    <?php require 'header-css.php'; ?>
<style>
    .examiner-banner{
        height: 600px!important;
        background-color: rgba(0,0,0,0.7)!important;
        background-image: url(assets/images/banner2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
    }
</style>
</head>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->
    <?php require 'header.php'; ?>
    <div class="banner_section full_screen staggered-animation-wrap">
        <div>
            <div class="carousel-inner">
                <div class="examiner-banner overlay_bg_60" data-img-src="assets/images/b1.jpg">
                    <div class="banner_slide_content">
                        <!-- <div class="container">STRART CONTAINER -->
                        <div class="row flex-column align-items-center">
                            <div class="col-lg-7 col-md-12 col-sm-12 text-center ">
                                <div class="banner_content text_white ">
                                    <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">About Us</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Teach Smart, Test Smarter.</p>
                                    <a class="btn btn-default btn-radius staggered-animation" href="Services.php" data-animation="fadeInUp" data-animation-delay="0.6s">Get Started</a>
                                    <a class="btn btn-white btn-radius staggered-animation" href="Demo.php" data-animation="fadeInUp" data-animation-delay="0.6s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <body>

<!-- LOADER -->
<div id="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top dark_skin main_menu_uppercase header_with_topbar">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail text-center text-lg-left">
                    	<li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                    	<li><i class="ti-email"></i><span>contact@yourmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        <ul class="header_list border_list">
                            <li><a href="#" class="nav_btn"><i class="ti-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
        	<a class="navbar-brand" href="index.html"> 
            	<img class="logo_light" src="assets/images/logo_light.png" alt="logo"> 
                <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo"> 
            </a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> <span class="ion-android-menu"></span> </button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Home</a>
                        <div class="dropdown-menu">
							<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="index.html">Homepage 1</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Homepage 2</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Homepage 3</a></li>
							</ul>
                        </div>
                    </li>
					<li class="dropdown"><a class="dropdown-toggle nav-link active" data-toggle="dropdown" href="#">Pages</a>
                        <div class="dropdown-menu">
							<ul>
                                <li><a class="dropdown-item nav-link nav_item active" href="about.html">About Us</a></li>
                                <li class="dropdown"> <a class="dropdown-item menu-link dropdown-toggler" data-toggle="dropdown" href="#">Teacher</a>
									<div class="dropdown-menu">
                                        <ul>
                                        	<li><a class="dropdown-item nav-link nav_item" href="teacher.html">Teacher</a></li>
                                        	<li><a class="dropdown-item nav-link nav_item" href="teacher-detail.html">Teacher Detail</a></li>
                                        </ul>
									</div>
                                </li>
                                <li class="dropdown"> <a class="dropdown-item menu-link dropdown-toggler" data-toggle="dropdown" href="#">Gallery</a>
                                	<div class="dropdown-menu">
                                        <ul>
                                        	<li><a class="dropdown-item nav-link nav_item" href="gallery.html">Gallery Grid</a></li>
                                        	<li><a class="dropdown-item nav-link nav_item" href="gallery-masonry.html">Gallery Masonry</a></li>
                                        </ul>
                                	</div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="contact.html">Contact Us</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="login.html">Login</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="signup.html">Register</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error Page</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html">Coming Soon</a></li>
                          </ul>
                        </div>
                      </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Courses</a>
                        <div class="dropdown-menu">
							<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="courses.html">Courses</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="course-detail.html">Courses Detail</a></li>
							</ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Events</a>
                        <div class="dropdown-menu">
                        	<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="events.html">Events</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="events-list.html">Events List</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="event-detail.html">Events Detail</a></li>
                        	</ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Blog</a>
                        <div class="dropdown-menu">
                        	<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="blog.html">Blog</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Blog Detail</a></li>
                         	</ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Shop</a>
                        <div class="dropdown-menu dropdown-reverse">
                         	<ul>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-three-columns.html">Shop Three Columns</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-four-columns.html">Shop Four Columns</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Shop Product Detail</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Shop Cart</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li>
                        	</ul>
                        </div>
                    </li>
                </ul>
          	</div>
			<ul class="navbar-nav attr-nav align-items-center">
                <li>
                	<a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                    <div class="search_wrap"> 
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <form>
                            <input type="text" placeholder="Search" class="form-control" id="search_input">
                            <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </li>
                <li class="dropdown">
                	<a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <ul class="cart_list">
                        	<li> <a href="#" class="item_remove"><i class="ion-close"></i></a> <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span> </li>
                        	<li> <a href="#" class="item_remove"><i class="ion-close"></i></a> <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span> </li>
                        </ul>
                        <div class="cart_footer">
                        	<p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                        	<p class="cart_buttons"><a href="#" class="btn btn-default view-cart">View Cart</a><a href="#" class="btn btn-dark checkout">Checkout</a></p>
                        </div>
                    </div>
                </li>
			</ul>
        </nav>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/about_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>About Us</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
 
<!-- START SECTION ABOUT -->
<div class="section small_pb">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="about_img"> <img src="assets/images/about_img2.jpg" alt="about_img2" /> </div>
          	</div>
          	<div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="about_section pl-lg-3">
              		<div class="heading_s1"> 
                    	<span class="sub_heading">About Us</span>
                		<h2>We're one of the best places to Explore And Learn With Fun</h2>
              		</div>
              		<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
              		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur quibusdam enim expedita sed nesciunt incidunt accusamus adipisci officia libero laboriosam!</p>
              		<a class="btn btn-dark" href="#">Read More</a> 
                </div>
			</div>
		</div>
	</div>
</div>
<!-- END SECTION ABOUT --> 

<!-- START SECTION WHY CHOOSE --> 
<div class="section small_pt pb_70">
	<div class="container">
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="icon_box icon_box_style1 box_shadow1 text-center">
                	<div class="icon ibc_orange">
                    	<i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Admission Center</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="icon_box icon_box_style1 box_shadow1 text-center">
                	<div class="icon ibc_green">
                    	<i class="fas fa-globe"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Online Training</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="icon_box icon_box_style1 box_shadow1 text-center">
                	<div class="icon ibc_pink">
                    	<i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="icon_box_content">
                    	<h5>Certification</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION WHY CHOOSE -->

<!-- START SECTION COUNTER -->
<div class="section background_bg counter_wrap bg_blue fixed_bg" data-img-src="assets/images/pattern_bg1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-book"></i>
                	<h3 class="counter_text"><span class="counter" data-from="0" data-to="280" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Courses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="box_counter counter_white text-center"> <i class="flaticon-student"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="1350" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Students</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-teacher"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="200" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Qualified Staff</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-trophy"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="150" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Awards win</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION COUNTER -->

<!-- START SECTION TEAM -->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                  <h2>Our Team Members</h2>
                </div>
            	<p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="team_box team_style2 radius_all_10">
					<div class="team_img"> 
                    	<img src="assets/images/team_img1.jpg" alt="team_img1">
                        <ul class="social_icons social_white">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
                          	<li><a href="#"><i class="ion-social-twitter"></i></a></li>
                          	<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                          	<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
					</div>
                  	<div class="team_content">
                        <div class="team_title">
							<h5>Anders Stone</h5>
							<span>Professor</span> 
                        </div>
                    </div>
                </div>
            </div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="team_box team_style2 radius_all_10">
                    <div class="team_img"> 
                        <img src="assets/images/team_img2.jpg" alt="team_img2">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                	</div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Laura Martin</h5>
                            <span>Accounting</span> 
                        </div>
                    </div>
                </div>
          	</div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
            			<img src="assets/images/team_img3.jpg" alt="team_img3">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
                    <div class="team_title">
                        <h5>Adam Smith</h5>
                        <span>Ceo & Architer</span> 
                    </div>
				</div>
			</div>
          </div>
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
                    	<img src="assets/images/team_img4.jpg" alt="team_img4">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
            			<div class="team_title">
            				<h5>Bruce Flores</h5>
            				<span>Accounting</span> 
            			</div>
            		</div>
            	</div>
          	</div>
        </div>
	</div>
</div>
<!-- END SECTION TEAM -->

<!-- START SECTION VIDEO -->
<div class="section background_bg overlay_bg_70 fixed_bg" data-img-src="assets/images/video_bg.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup">
                    	<span class="ripple"><i class="ion-play"></i></span>
                    </a>
                    <div class="video_text animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="text_default">Watch Our Latest Video</span>
                        <h2>Let's Take a Small Tour From Video Tutorial For Our Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION VIDEO -->

<!-- START SECTION TESTIMONIAL -->
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                	<h2>Our Client Say!</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
        		<div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "991":{"items": "3"}}'>
        			<div class="testimonial_box">
        				<div class="author_info">
        					<div class="author_img">
                            	<img src="assets/images/testi_user1.jpg" alt="user" /> 
                            </div>
        					<div class="author_name">
        						<h6>Richard Clark</h6>
        						<span>CEO HR Group</span> 
                            </div>
        				</div>
       					<div class="testimonial_desc">
        					<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
        				</div>
        			</div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="assets/images/testi_user2.jpg" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>Daisy Lana</h6>
                                <span>Designer</span> 
                            </div>
                        </div>
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="assets/images/testi_user3.jpg" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>Alden Smith</h6>
                                <span>Designer</span> 
                            </div>
                        </div>
                    <div class="testimonial_desc">
                    	<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                    </div>
        			</div>
                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_img"> 
                                <img src="assets/images/testi_user4.jpg" alt="user" /> 
                            </div>
                            <div class="author_name">
                                <h6>John Becker</h6>
                                <span>Designer</span> 
                            </div>
                            </div>
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL -->



    

    <div class= width: 20px> COMING SOON </div>


    <?php require 'footer-css.php'; ?>
<?php require 'footer.php'; ?>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>