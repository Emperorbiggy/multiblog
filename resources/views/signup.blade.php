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
                                    <a href="#">Home </a>

                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">News</a>
                                
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Sport</a>
                                    
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Categories </a>
                                    
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Politics </a>
                                    
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">Contact Us </a>
                                </li>
                            </ul>
                        </div>

                        <div class="header1-buttons">
                            <div class="vl-search-top">
                                <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                            <a class="theme-btn1" href="{{ url('/signup') }}">Register </a>
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
			</li>
			<li class="has-dropdown">
				<a href="#">Blog</a>
			</li>
			<li class="has-dropdown">
				<a href="#">Single Posts</a>
				
			</li>

			<li class="has-dropdown">
				<a href="#">Pages</a>

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

		

		

		<!--===== CONTENT AREA START=======-->

		<div class="login-page sp bg-cover" style="background-image: url({{ asset('assets/img/bg/login-page-bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-main-heading">
                    <div class="page-prog">
                        <a href="{{ url('/') }}">Home</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        <p class="bold">Sign Up</p>
                    </div>
                    <h1>Sign Up</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="login-form">
                    <h3>Create Your Account</h3>
                    <p>Create an account today and start using 9janub</p>
                    
                    <form action="" method="POST">
                        @csrf
                        <div class="single-input">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Your name" value="{{ old('name') }}" required />
                        </div>
                        <div class="single-input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email address" value="{{ old('email') }}" required />
                        </div>
                        <div class="single-input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter your password" required />
                        </div>
                        <div class="button mt-30">
                            <button type="submit" class="theme-btn1">Create An Account</button>
                        </div>
                        <div class="text-start mt-3">
                            <p class="text">
                                <input type="checkbox" name="terms" id="checkbox1" required />
                                <label for="checkbox1">I have read and agree to the</label>
                                <a href="#">Terms & Conditions</a>.
                            </p>
                            <p class="or"><span>Or</span></p>
                            <div class="button">
                                <a href="{{ url('/') }}" class="theme-btn2">Login</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


		<!--===== CONTENT AREA END=======-->

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
