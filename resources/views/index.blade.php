<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Multiblog Test</title>

	<!--=====FAB ICON=======-->
	<link rel="shortcut icon" href="{{ asset('assets/img/logo/title1.svg') }}" type="image/x-icon" />

	<!--=====CSS=======-->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

	<!--=====JQUERY=======-->
	<script src="{{ asset('assets/js/jquery-3-7-1.min.js') }}"></script>
</head>
<body>
	<div class="paginacontainer">
		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
	</div>

	<!--=====PRELOADER=======-->
	<div class="sec-preloader">
		<div class="overlay-preloader flex cac vac" id="preloader">
			<div>
				<div class="loader preloader flex vac">
					<svg width="200" height="200">
						<circle class="background" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)" />
						<circle class="outer" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)" />
					</svg>
					<span class="circle-background"></span>
					<span class="logo animated fade-in"> </span>
				</div>
			</div>
		</div>
	</div>

	<!-- search popup start -->
	<div class="search__popup">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="search__wrapper">
						<div class="search__top d-flex justify-content-between align-items-center">
							<div class="search__logo">
								<a href="{{ url('/') }}">
									<img src="{{ asset('assets/img/logo/white-logo.png') }}" alt="9janub" />
								</a>
							</div>
							<div class="search__close">
								<button type="button" class="search__close-btn search-close-btn">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
							</div>
						</div>
						<div class="search__form">
							<form action="#">
								<div class="search__input">
									<input class="search-input-field" type="text" placeholder="Type here to search..." />
									<span class="search-focus-border"></span>
									<button type="submit">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- search popup end -->



		<!--=====HEADER START=======-->
<header>
    <div class="header-area header-area1 d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo/header-logo1.png') }}" alt="9janub" />
                            </a>
                        </div>

                        <div class="main-menu-ex main-menu-ex1">
                            <ul>
                                <li>
                                    <a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                                    <div class="tp-submenu">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-images-menu">
                                                    @for ($i = 1; $i <= 4; $i++)
                                                        <div class="homemenu-thumb" style="{{ $i === 4 ? 'margin: 0' : '' }}">
                                                            <div class="img1">
                                                                <img src="{{ asset("assets/img/demo/demo$i.jpg") }}" alt="9janub" />
                                                            </div>
                                                            <div class="homemenu-btn">
                                                                <a class="header-btn1" href="{{ url("index$i.html") }}">View Page <i class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                            <a class="text" href="{{ url("index$i.html") }}">Modern Blog 0{{ $i }}</a>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Blog <i class="fa-solid fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('blog.html') }}">Blog Format 1</a></li>
                                        <li><a href="{{ url('blog2.html') }}">Blog Format 2</a></li>
                                        <li><a href="{{ url('blog3.html') }}">Blog Format 3</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Single Posts <i class="fa-solid fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('blog-details1.html') }}">Standard Format</a></li>
                                        <li><a href="{{ url('blog-details2.html') }}">Split Format</a></li>
                                        <li><a href="{{ url('blog-details3.html') }}">Overlay Format</a></li>
                                        <li><a href="{{ url('blog-details-sidebar-left.html') }}">Sidebar Left</a></li>
                                        <li><a href="{{ url('blog-details-sidebar-right.html') }}">Sidebar Right</a></li>
                                        <li><a href="{{ url('blog-single.html') }}">Single Post</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Categories <i class="fa-solid fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('categories.html') }}">Categories 01</a></li>
                                        <li><a href="{{ url('categories2.html') }}">Categories 02</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Pages <i class="fa-solid fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('author.html') }}">Author</a></li>
                                        <li><a href="{{ url('search.html') }}">Search Result</a></li>
                                        <li><a href="{{ url('contact.html') }}">Contact Us</a></li>
                                        <li><a href="{{ url('social-media.html') }}">Social Media</a></li>
                                        <li><a href="{{ url('404.html') }}">404</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Account <i class="fa-solid fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('login.html') }}">Login</a></li>
                                        <li><a href="{{ url('sigup.html') }}">Sign Up</a></li>
                                        <li><a href="{{ url('forgot.html') }}">Forgot</a></li>
                                        <li><a href="{{ url('reset.html') }}">Reset Password</a></li>
                                        <li><a href="{{ url('verify.html') }}">Verify</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="header1-buttons">
                            <div class="vl-search-top">
                                <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                            <a class="theme-btn1" href="{{ url('sigup.html') }}">Subscribe </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END=======-->

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-main d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ url('index1.html') }}">
                        <img src="{{ asset('assets/img/logo/header-logo1.png') }}" alt="9janub" />
                    </a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-duotone fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mobile-sidebar d-block d-lg-none">
	<div class="logo-m">
		<a href="{{ url('index.html') }}"><img src="{{ asset('assets/img/logo/header-logo1.png') }}" alt="9janub" /></a>
	</div>
	<div class="menu-close">
		<i class="fa-solid fa-xmark"></i>
	</div>
	<div class="mobile-nav">
		<ul>
			<li class="has-dropdown">
				<a href="#">Home </a>
				<ul class="sub-menu">
					<li><a href="{{ url('index.html') }}">Home 1</a></li>
					<li><a href="{{ url('index2.html') }}">Home 2</a></li>
					<li><a href="{{ url('index3.html') }}">Home 3</a></li>
					<li><a href="{{ url('index4.html') }}">Home 4</a></li>
				</ul>
			</li>
			<li class="has-dropdown">
				<a href="#">Blog</a>
				<ul class="sub-menu">
					<li><a href="{{ url('blog.html') }}">Blog 01</a></li>
					<li><a href="{{ url('blog2.html') }}">Blog 02</a></li>
					<li><a href="{{ url('blog3.html') }}">Blog 03</a></li>
				</ul>
			</li>
			<li class="has-dropdown">
				<a href="#">Single Posts</a>
				<ul class="sub-menu">
					<li><a href="{{ url('blog-details1.html') }}">Standard Format</a></li>
					<li><a href="{{ url('blog-details2.html') }}">Split Format</a></li>
					<li><a href="{{ url('blog-details3.html') }}">Overlay Format</a></li>
					<li><a href="{{ url('blog-details-sidebar-left.html') }}">Sidebar Left</a></li>
					<li><a href="{{ url('blog-details-sidebar-right.html') }}">Sidebar Right</a></li>
					<li><a href="{{ url('blog-single.html') }}">Single Post</a></li>
				</ul>
			</li>

			<li class="has-dropdown">
				<a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="{{ url('author.html') }}">Author</a></li>
					<li><a href="{{ url('search.html') }}">Search Result</a></li>
					<li><a href="{{ url('contact.html') }}">Contact Us</a></li>
					<li><a href="{{ url('social-media.html') }}">Social Media</a></li>
					<li><a href="{{ url('404.html') }}">404</a></li>
				</ul>
			</li>

			<li class="has-dropdown has-dropdown1">
				<a href="#" class="main">Account</a>
				
			</li>
			<li><a href="{{ url('contact.html') }}">Contact Us</a></li>
		</ul>

		<div class="mobile-button">
			<a class="theme-btn1" href="{{ url('contact.html') }}">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
		</div>

		<div class="footer-contact-area1 md:pl-0 pl-20 sm:pl-0 mt-30">
			<h3 class="text-24 leading-26 font-semibold title1 pb-10">Get in touch</h3>
			<div class="contact-box d-flex">
				<div class="icon">
					<img src="{{ asset('assets/img/icons/footer1-icon1.svg') }}" alt="9janub" />
				</div>
				<div class="text">
					<a href="mailto:contact@9janub.com">contact@9janub.com</a>
				</div>
			</div>

			<div class="contact-box d-flex">
				<div class="icon">
					<img src="{{ asset('assets/img/icons/footer1-icon2.svg') }}" alt="9janub" />
				</div>
				<div class="text">
					<a href="#">123 Innovation Drive,<br /> Tech City, ST 12345, USA</a>
				</div>
			</div>

			<div class="contact-box d-flex">
				<div class="icon">
					<img src="{{ asset('assets/img/icons/footer1-icon3.svg') }}" alt="9janub" />
				</div>
				<div class="text">
					<a href="tel:123-456-7890">123-456-7890</a>
				</div>
			</div>
		</div>

		<div class="contact-infos">
			<h3>Our Social Network</h3>
			<ul class="social-icon">
				<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
</div>

		<!--=====Mobile header end=======-->

		<!--===== HERO AREA START=======-->

		<div class="hero1">
			<div class="container">
				<div class="hero1-bg bg-cover" style="background-image: url(assets/img/bg/hero1-bg.jpg)">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="main-image reveal">
								<img src="assets/img/hero/hero1-image.png" alt="9janub" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-heading1">
								<h1 class="text-anime-style-3">Unlocking The Secrets To Social Media Success</h1>
								<p class="mt-16" data-aos="fade-left" data-aos-duration="400" data-aos-delay="100">Social media is more than just a platform—it’s a powerful tool for building connections, amplifying your brand, and driving growth. At 9janub, we provide insights and strategies to help you stand out in the ever-evolving social media landscape.</p>
								<div class="form-area">
									<form action="#" data-aos="fade-left" data-aos-duration="400" data-aos-delay="100">
										<input type="email" placeholder="Enter Your Email" />
										<div class="button">
											<button class="theme-btn1">Get Started</button>
										</div>
									</form>
								</div>
								<p class="bottom-content" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="100">❊ Connect, engage, & inspire—social media success starts here.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--===== HERO AREA END=======-->

		<!--===== BLOG AREA START=======-->

		<div class="blog1 sp bg1 _relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="blog1-posts-area">
							<div class="row">
								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="0">
									<div class="blog1-single-box">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image1.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Social Media</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">The Art of Building a Strong Personal Brand on Social Media</a></h4>
											<p class="mt-16">This post explores strategies to help create an authentic and memorable brand presence on social media that resonates with audience.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author1.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Kimberly Mastrangelo</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 26, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="100">
									<div class="blog1-single-box sm:mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image2.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Social Media</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Proven Strategies to Boost Your Social Media Metrics</a></h4>
											<p class="mt-16">Engagement is key to building a loyal following. Learn techniques for crafting posts that invite interaction, encouraging shares.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author2.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Kathy Pacheco</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 21, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="0">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image3.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Brand’s</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">The Power of Storytelling: How to Make Your Brand’s Voice Stand Out</a></h4>
											<p class="mt-16">Discover ways to create relatable and impactful stories that reinforce your brand and keep followers coming back.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author3.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Corina McCoy</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Nov 2, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="100">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image4.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Content</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Mastering Content Calendars: A Guide to Consistent and Strategic.</a></h4>
											<p class="mt-16">Consistency is crucial for success on social media. This guide helps you create an effective content calendar to stay organized.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author4.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Rodger Struck</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Nov 6, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="0">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image5.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Trending</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Social Media Trends for 2024: What to Watch and How to Adapt </a></h4>
											<p class="mt-16">The social media landscape evolves quickly. Stay ahead of the curve by understanding key trends for 2024,</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author5.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Rhonda Rhodes</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Nov 6, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="100">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image6.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Brand Consistency</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Creating a Visual Identity: Tips for Aesthetic and Brand Consistency </a></h4>
											<p class="mt-16">This post covers tips on color schemes, fonts, and visuals to keep your profile visually appealing and cohesive.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author5.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Katie Sims</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Nov 6, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="0">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image7.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Gen - Z</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">How to Build Authentic Connections with the New Generation</a></h4>
											<p class="mt-16">Gen Z is reshaping digital interaction. Learn what matters to this generation and how to create authentic, meaningful content.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author5.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">David Elson</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 26, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="100">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image8.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Social Media</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Harnessing Analytics: Using Data to Refine Your Social Media Strategy</a></h4>
											<p class="mt-16">Gen Z is reshaping digital interaction. Learn what matters to this generation and how to create authentic, meaningful content.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author5.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Kenneth Allen</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 26, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="0">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image9.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Social Media</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">From Follower to Customer: Turning Social Engagement into Sales</a></h4>
											<p class="mt-16">Transforming followers into customers requires a solid strategy. This post offers insights on using social media as a powerful tool convert.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author2.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Judith Rodriguez</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 26, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="100">
									<div class="blog1-single-box mt-30">
										<div class="thumbnail image-anime">
											<img src="assets/img/blog/blog1-image10.png" alt="9janub" />
										</div>
										<div class="heading1">
											<div class="social-area">
												<a href="social-media.html" class="social">Feedback</a>
												<a href="categories.html" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
											</div>
											<h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand Reputation.</a></h4>
											<p class="mt-16">Dealing with criticism on social media can be challenging. Learn ways to manage negative feedback professionally to protect your brand.</p>
											<div class="author-area">
												<div class="author">
													<div class="author-tumb">
														<img src="assets/img/blog/blog1-author6.png" alt="9janub" />
													</div>
													<a href="author.html" class="author-text">Iva Ryan</a>
												</div>
												<div class="date">
													<a href="#"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 26, 2024 </a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="space60"></div>
							<div class="row" data-aos-offset="50" data-aos="fade-up" data-aos-duration="400">
								<div class="col-12 m-auto">
									<div class="theme-pagination text-center">
										<ul>
											<li>
												<a href="#"><i class="fa-solid fa-angle-left"></i></a>
											</li>
											<li><a class="active" href="#">01</a></li>
											<li><a href="#">02</a></li>
											<li>...</li>
											<li><a href="#">12</a></li>
											<li>
												<a href="#"><i class="fa-solid fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="blog1-sidebar-area ml-30 sm:ml-0 md:ml-0 md:mt-30 sm:mt-30">
							<div class="sidebar-widget_1 _search-area1">
								<h3>Search</h3>
								<form action="#">
									<input type="text" placeholder="Search..." />
								</form>
							</div>
							<div class="sidebar-widget_1 _author-intro mt-40">
								<div class="sidebar-author-thumb text-center">
									<img src="assets/img/blog/sidebar-author1.png" alt="9janub" />
									<h4>Jerry Helfer</h4>
									<div class="heading1">
										<p>Whether you’re a tech enthusiast or a business leader, these emerging trends are reshaping the future and offering endless opportunities for growth and creativity.</p>
									</div>
									<div class="footer-social1">
										<ul>
											<li>
												<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-instagram"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-regular fa-basketball"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-behance"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="sidebar-widget_1 _recent-posts mt-40">
								<h3>Recent Post</h3>

								<div class="blog1-recent-box">
									<div class="">
										<div class="recent-thumb">
											<img src="assets/img/blog/blog1-recent1.png" alt="9janub" />
										</div>
									</div>
									<div class="heading">
										<a href="#" class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 13, 2024</a>
										<h5><a href="blog-single.html">The Power of Storytelling: How Make Your Brand’s Voice...</a></h5>
									</div>
								</div>

								<div class="blog1-recent-box mt-16">
									<div class="">
										<div class="recent-thumb">
											<img src="assets/img/blog/blog1-recent2.png" alt="9janub" />
										</div>
									</div>
									<div class="heading">
										<a href="#" class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 12, 2024</a>
										<h5><a href="blog-single.html">Mastering Content Calendars: A Guide to Consistent Strat...</a></h5>
									</div>
								</div>

								<div class="blog1-recent-box mt-16">
									<div class="">
										<div class="recent-thumb">
											<img src="assets/img/blog/blog1-recent3.png" alt="9janub" />
										</div>
									</div>
									<div class="heading">
										<a href="#" class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 21, 2024</a>
										<h5><a href="blog-single.html">Social Media Trends for 2024: What to Watch and How to...</a></h5>
									</div>
								</div>

								<div class="blog1-recent-box mt-16">
									<div class="">
										<div class="recent-thumb">
											<img src="assets/img/blog/blog1-recent4.png" alt="9janub" />
										</div>
									</div>
									<div class="heading">
										<a href="#" class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 19, 2024 </a>
										<h5><a href="blog-single.html">Creating a Visual Identity: Tips for Aesthetic & Brand Consi...</a></h5>
									</div>
								</div>
							</div>
							<div class="sidebar-slider-widget mt-40">
								<div class="sidebar-single-slider">
									<div class="social-top">
										<a href="#" class="social">Social Media</a>
										<a href="#" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
									</div>
									<div class="heading-area">
										<div class="_author-area">
											<div class="author">
												<div class="author_thumb">
													<img src="assets/img/blog/blog1-author2.png" alt="9janub" />
												</div>
												<span class="author-name">Lorri Warf</span>
											</div>
											<span class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 21, 2024</span>
										</div>
										<h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand Reputation on Social Media</a></h4>
									</div>
								</div>

								<div class="sidebar-single-slider">
									<div class="social-top">
										<a href="#" class="social">Social Media</a>
										<a href="#" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
									</div>
									<div class="heading-area">
										<div class="_author-area">
											<div class="author">
												<div class="author_thumb">
													<img src="assets/img/blog/blog1-author2.png" alt="9janub" />
												</div>
												<span class="author-name">Lorri Warf</span>
											</div>
											<span class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 21, 2024</span>
										</div>
										<h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand Reputation on Social Media</a></h4>
									</div>
								</div>

								<div class="sidebar-single-slider">
									<div class="social-top">
										<a href="#" class="social">Social Media</a>
										<a href="#" class="time"><img src="assets/img/icons/time1.svg" alt="9janub" /> 3 min read</a>
									</div>
									<div class="heading-area">
										<div class="_author-area">
											<div class="author">
												<div class="author_thumb">
													<img src="assets/img/blog/blog1-author2.png" alt="9janub" />
												</div>
												<span class="author-name">Lorri Warf</span>
											</div>
											<span class="date"><img src="assets/img/icons/date1.svg" alt="9janub" /> Oct 21, 2024</span>
										</div>
										<h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand Reputation on Social Media</a></h4>
									</div>
								</div>
							</div>
							<div class="sidebar-widget_1 mt-70 _experience">
								<h3>Work Experience</h3>
								<div class="_experience-box divider">
									<p class="bold-text">Product Design</p>
									<p class="normal-text">2020 - Now</p>
								</div>

								<div class="_experience-box divider">
									<p class="bold-text">Brand Expertise</p>
									<p class="normal-text">2018 - Now</p>
								</div>

								<div class="_experience-box divider">
									<p class="bold-text">UI/UX Design</p>
									<p class="normal-text">2021 - Now</p>
								</div>

								<div class="_experience-box">
									<p class="bold-text">SEO Expert</p>
									<p class="normal-text">2019 - Now</p>
								</div>
							</div>

							<div class="sidebar-widget_1 instagram-feed mt-40">
								<h3>Instagram Posts</h3>

								<div class="feed-all">
									<div class="row">
										<div class="col-4">
											<div class="feed-single">
												<div class="image">
													<img src="assets/img/blog/blog1-feed1.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>

										<div class="col-4">
											<div class="feed-single">
												<div class="image">
													<img src="assets/img/blog/blog1-feed2.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>

										<div class="col-4">
											<div class="feed-single">
												<div class="image">
													<img src="assets/img/blog/blog1-feed3.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>

										<div class="col-4">
											<div class="feed-single mt-20">
												<div class="image">
													<img src="assets/img/blog/blog1-feed4.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>

										<div class="col-4">
											<div class="feed-single mt-20">
												<div class="image">
													<img src="assets/img/blog/blog1-feed5.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>

										<div class="col-4">
											<div class="feed-single mt-20">
												<div class="image">
													<img src="assets/img/blog/blog1-feed6.png" alt="9janub" />
													<a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="#" class="insta-btn"
									>View on Instagram <span><i class="fa-regular fa-arrow-right"></i></span
								></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--===== BLOG AREA END=======-->

		<!--===== BLOG CETEGORYS START=======-->
		<div class="blog1-cetegorys sp">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="heading1">
							<h2 class="text-anime-style-3">All Blog Post Categories</h2>
						</div>
					</div>
					<div class="col-lg-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="350">
						<div class="text-end md:text-start sm:text-start sm:mt-20 md:mt-20">
							<a class="theme-btn1" href="categories.html">Explore All Topic </a>
						</div>
					</div>
				</div>

				<div class="row mt-30 sm:mt-0 md:mt-0">
					<div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="450">
						<div class="blog1-cetegory-box mt-30 text-center">
							<div class="image image-anime">
								<img src="assets/img/blog/blog1-cetegroy-post1.png" alt="9janub" />
							</div>
							<div class="heading1 mt-16">
								<h4><a href="social-media.html">Social Media </a></h4>
							</div>
						</div>
					</div>

					<div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="400">
						<div class="blog1-cetegory-box mt-30 text-center">
							<div class="image image-anime">
								<img src="assets/img/blog/blog1-cetegroy-post2.png" alt="9janub" />
							</div>
							<div class="heading1 mt-16">
								<h4><a href="social-media.html">Digital Marketing </a></h4>
							</div>
						</div>
					</div>

					<div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="350">
						<div class="blog1-cetegory-box mt-30 text-center">
							<div class="image image-anime">
								<img src="assets/img/blog/blog1-cetegroy-post3.png" alt="9janub" />
							</div>
							<div class="heading1 mt-16">
								<h4><a href="social-media.html">Startup Agency </a></h4>
							</div>
						</div>
					</div>

					<div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="300">
						<div class="blog1-cetegory-box mt-30 text-center">
							<div class="image image-anime">
								<img src="assets/img/blog/blog1-cetegroy-post4.png" alt="9janub" />
							</div>
							<div class="heading1 mt-16">
								<h4><a href="social-media.html">Design & Development </a></h4>
							</div>
						</div>
					</div>

					<div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="250">
						<div class="blog1-cetegory-box mt-30 text-center">
							<div class="image image-anime">
								<img src="assets/img/blog/blog1-cetegroy-post5.png" alt="9janub" />
							</div>
							<div class="heading1 mt-16">
								<h4><a href="social-media.html">Life style </a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--===== BLOG CETEGORYS END=======-->

		<!--===== CTA AREA START=======-->

		<div class="cta1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="heading1-w">
							<h2>Ready to Elevate Your Social Media Game?</h2>
							<p class="mt-16">Unlock the tools and insights you need to thrive on social media with 9janub. Join our community for expert tips, trending strategies, and resources that empower you to stand out and succeed.</p>
							<div class="form-area">
								<form action="#">
									<input type="email" placeholder="Enter Your Email" />
									<div class="button">
										<button class="theme-btn1">Get Started</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="image text-end sm:text-start md:text-start sm:mt-30 md:mt-30">
							<img src="assets/img/hero/hero1-image.png" alt="9janub" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--===== CTA AREA END=======-->

		<!--===== FOOTER AREA START=======-->

		<div class="footer1 mt-80 md:mt-40 sm:mt-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="logo">
							<a href="index.html"><img src="assets/img/logo/header-logo1.png" alt="9janub" /></a>
						</div>
						<div class="heading1 mt-16">
							<p>9janub is your hub for the latest in digital innovation, technology trends, creative insights. Our mission is to empower creators, businesses, valuable resource.</p>
							<div class="footer-social1">
								<ul>
									<li>
										<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-regular fa-basketball"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa-brands fa-behance"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mb-50 sm:mb-30 sm:mt-30">
						<div class="footer-list1 ml-80 md:ml-0 sm:ml-0">
							<h3>Explore Categories</h3>
							<ul>
								<li><a href="#">Digital Marketing </a></li>
								<li><a href="#">Ai & Technology </a></li>
								<li><a href="#">Content Strategy </a></li>
								<li><a href="#">Social Media </a></li>
								<li><a href="#">SEO & Analytics </a></li>
								<li><a href="#">Design & Development </a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="footer-list1 ml-50 md:ml-0 sm:ml-0 mb-50 sm:mb-30">
							<h3>Quick Links</h3>
							<ul>
								<li><a href="#">Home </a></li>
								<li><a href="#">Blog </a></li>
								<li><a href="#">Features </a></li>
								<li><a href="#">Contact us </a></li>
								<li><a href="#">Privacy & policy </a></li>
								<li><a href="#">Terms of Services </a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="footer-contact-list1 mb-50 sm:mb-30">
							<h3>Contact Us</h3>
							<div class="footer-contact-box1">
								<div class="icon">
									<img src="assets/img/icons/footer1-icon1.svg" alt="9janub" />
								</div>
								<div class="text">
									<a href="#">support@9janub.com</a>
								</div>
							</div>

							<div class="footer-contact-box1">
								<div class="icon">
									<img src="assets/img/icons/footer1-icon2.svg" alt="9janub" />
								</div>
								<div class="text">
									<a href="#"
										>8708 Technology Forest Pl <br />
										Suite 125 -G, The Woodlands, <br />
										TX 773</a
									>
								</div>
							</div>

							<div class="footer-contact-box1">
								<div class="icon">
									<img src="assets/img/icons/footer1-icon3.svg" alt="9janub" />
								</div>
								<div class="text">
									<a href="#">123-456-7890</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="coppyrihgt1">
					<div class="row coppyrihgt-border">
						<div class="col-md-6">
							<p class="coppyrihgt">© 2024 9janub, Inc. All Rights Reserved.</p>
						</div>
						<div class="col-md-6">
							<div class="conditions">
								<a href="#"> Privacy Policy </a>
								<a href="#"> Terms & Conditions </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--===== FOOTER AREA END=======-->

		<!--=== js === -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/fontawesome.js"></script>
		<script src="assets/js/mobile-menu.js"></script>
		<script src="assets/js/jquery.magnific-popup.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.countup.js"></script>
		<script src="assets/js/slick-slider.js"></script>
		<script src="assets/js/circle-progress.js"></script>
		<script src="assets/js/jquery.nice-select.js"></script>
		<script src="assets/js/gsap.min.js"></script>
		<script src="assets/js/ScrollTrigger.min.js"></script>
		<script src="assets/js/swiper-bundle.js"></script>
		<script src="assets/js/Splitetext.js"></script>
		<script src="assets/js/text-animation.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/SmoothScroll.js"></script>
		<script src="assets/js/jaquery-ripples.js"></script>
		<script src="assets/js/jquery.lineProgressbar.js"></script>
		<script src="assets/js/animation.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
