<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/template/dinas/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="/template/dinas/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/template/dinas/css/skin/skin-3.css">
	<link rel="stylesheet" type="text/css" href="/template/dinas/css/templete.css">
	
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="/template/dinas/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="/template/dinas/plugins/revolution/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER CSS END -->

</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-6 style-1">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
				<div class=" d-flex bar align-items-center justify-content-between">
					<div class="dez-topbar-left">
						<ul>
							<li class="text-dark"><i class="fas fa-map-marker-alt text-primary"></i> {{ get_option('alamat') }}</li>
							<li class="text-dark"><i class="flaticon-building text-primary"></i>Certified ISO 9001 : 2008</li>
						</ul>
					</div>
					<div class="dez-topbar-right">
						<ul class="social-bx list-inline pull-right">
							<li><a target="_blank" href="https://www.facebook.com/dexignzone/"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/dexignzones"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/in/dexignzone"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/dexignzone/"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
            </div>
        </div>
        <!-- top bar END-->
		<div class="bg-white">
			<div class="container header-contant-block">
				<div class="row align-items-center">
					<div class="col-md-4">
						<a href="index.html" class="logo-dark">
							<img src="{{get_option('logo')}}" width="193" height="89" alt="">
						</a>
					</div>
					<div class="col-md-8">
						<ul class="contact-info clearfix">
							<li>
								<h6 class="text-primary"><i class="fa fa-phone text-primary"></i> Telp</h6>
								<span>+141 0800-123456</span> </li>
							<li>
								<h6 class="text-primary"><i class="far fa-envelope text-primary"></i> Kirim Email</h6>
								<span>info@dexignzone.com</span> </li>
							<li>
								<h6 class="text-primary"><i class="far fa-clock text-primary"></i> Opening Time</h6>
								<span>Mon -Sat: 7:00 - 17:00</span> </li>
							<li> 
								<a class="site-button btn-block radius-sm text-center"> 
									<h6 class="m-a0 dis-block font-16">Call Toll Free</h6>
									<p class="m-a0 dis-block text-white">+91 123 456 7890</p>
								</a> 
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="navigation-bar">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion">
							<a href="index.html">
								<img src="{{get_option('logo')}}" width="193" height="89" alt="">
							</a>
						</div>
                        <!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Quik search -->
                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fas fa-times"></i></span>
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse nav-dark justify-content-start" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
								<li class="active"> <a href="javascript:void(0);"> <i class="fa fa-home"></i> Home</a>
										 
								</li>
								<li> <a href="javascript:void(0);">Features<i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li> <a href="javascript:void(0);">Header</a>
											<ul class="sub-menu">
												<li><a href="header-style-1.html">Header 1</a></li>
												<li><a href="header-style-2.html">Header 2</a></li>
												<li><a href="header-style-3.html">Header 3</a></li>
												<li><a href="header-style-4.html">Header 4</a></li>
												<li><a href="header-style-5.html">Header 5</a></li>
												<li><a href="header-style-6.html">Header 6</a></li>
												<li><a href="header-style-7.html">Header 7</a></li>
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Footer</a>
											<ul class="sub-menu">
												<li><a href="footer-fixed.html">Footer Fixed</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="has-mega-menu "> <a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a>
									<ul class="mega-menu">
										<li> <a href="javascript:void(0);">Pages</a>
											<ul>
												<li><a href="about-1.html">About us 1</a></li>
												<li><a href="about-2.html">About us 2</a></li>
												<li><a href="faq.html">FAQ</a> </li>
												<li><a href="project.html">Project</a></li>
												<li><a href="project-details.html">Project Details</a></li>
												<li><a href="all-service.html">All Service </a></li>
												<li><a href="architecture.html">Architecture </a></li>
												<li><a href="big-projects.html">Big Projects </a></li>
												<li><a href="construction.html">Construction </a></li>
												<li><a href="consulting.html">Consulting </a></li>
												<li><a href="concrete-transport.html">Concrete Transport </a></li>
												
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Pages</a>
											<ul>
												<li><a href="renovations.html">Renovations </a></li>
												<li><a href="services-1.html">Services 1 </a></li>
												<li><a href="services-2.html">Services 2</a></li>
												<li><a href="services-3.html">Services 3</a></li>
												<li><a href="career.html">Career</a></li>
												<li><a href="who-we-are.html">Who we are</a></li>
												<li><a href="portfolio-1.html">Portfolio 1</a></li>
												<li><a href="portfolio-2.html">Portfolio 2</a></li>
												<li><a href="portfolio-3.html">Portfolio 3</a></li>
												<li><a href="portfolio-details.html">portfolio-details</a></li>
												<li><a href="full-page-gallery-dark.html">Gallery Full Page Style 1</a></li>
												
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Pages</a>
											<ul>
												<li><a href="full-page-gallery-light.html">Gallery Full Page Style 2</a></li>
												<li><a href="gallery-grid-2.html">Gallery Grid 2</a></li>
												<li><a href="gallery-grid-3.html">Gallery Grid 3</a></li>
												<li><a href="gallery-grid-4.html">Gallery Grid 4</a></li>
												<li><a href="error-403.html">Error 403</a></li>
												<li><a href="error-404.html">Error 404</a></li>
												<li><a href="error-405.html">Error 405</a></li>
												<li><a href="coming-soon-1.html">Coming Soon 1</a></li>
												<li><a href="coming-soon-2.html">Coming Soon 2</a></li>
												<li><a href="coming-soon-3.html">Coming Soon 3</a></li>
												<li><a href="coming-soon-4.html">Coming Soon 4</a></li>
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Pages</a>
											<ul>
												<li><a href="coming-soon-5.html">Coming Soon 5</a></li>
												<li><a href="coming-soon-6.html">Coming Soon 6</a></li>
												<li><a href="coming-soon-7.html">Coming Soon 7</a></li>
												<li><a href="coming-soon-8.html">Coming Soon 8</a></li>
												<li><a href="coming-soon-9.html">Coming Soon 9</a></li>
												<li><a href="login-1.html">Login 1</a></li>
												<li><a href="login-2.html">Login 2</a></li>
												<li><a href="login-3.html">Login 3</a></li>
												<li><a href="login-4.html">Login 4</a></li>
												<li><a href="login-5.html">Login 5</a></li>
												<li><a href="login-6.html">Login 6</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li> <a href="javascript:void(0);">Shop<i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="product.html">Product  </a></li>
										<li><a href="product-2.html">Product 2 </a></li>
										<li><a href="product-details.html">Product details</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="shopping-cart.html">Shopping Cart</a></li>
									</ul>
								</li>
								<li class="has-mega-menu">
									<a href="javascript:void(0);">Post Layout <i class="fa fa-chevron-down"></i></a>
									<ul class="mega-menu">
										<li> 
											<a href="javascript:;">Side Bar</a>
											<ul>
												<li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
												<li><a href="post-right-sidebar.html">Post Right Sidebar</a></li>
												<li><a href="post-both-sidebar.html">Post Both Sidebar <span class="new-page">New</span></a></li>
												<li><a href="post-no-sidebar.html">Post No Sidebar</a></li>
											</ul>
										</li>
										<li> 
											<a href="javascript:;">Post Types</a>
											<ul>
												<li><a href="post-text.html">Text Post<span class="new-page">New</span></a></li>
												<li><a href="post-image.html">Image Post<span class="new-page">New</span></a></li>
												<li><a href="post-video.html">Post Video<span class="new-page">New</span></a></li>
												<li><a href="post-link.html">Post Link<span class="new-page">New</span></a></li>
												<li><a href="post-audio.html">Post Audio<span class="new-page">New</span></a></li>
												<li><a href="post-quote.html">Post Quote<span class="new-page">New</span></a></li>
												<li><a href="post-tutorial.html">Tutorial Post <span class="new-page">New</span></a></li>
												<li><a href="post-cateloge.html">Cateloge Post<span class="new-page">New</span></a></li>
											</ul>
										</li>
										<li> 
											<a href="javascript:;">Multiple Media</a>
											<ul>
												<li><a href="post-banner.html">Banner<span class="new-page">New</span></a></li>
												<li><a href="post-slide-show.html">Post Slide Show<span class="new-page">New</span></a></li>
												<li><a href="post-gallery.html">Gallery<span class="new-page">New</span></a></li>
												<li><a href="post-status-slider.html">Status Slider<span class="new-page">New</span></a></li>
											</ul>
										</li>
										<li> 
											<a href="javascript:;">Post Layout Type</a>
											<ul>
												<li><a href="post-standard.html" class="dez-page">Post Standard<span class="new-page">New</span></a></li>
												<li><a href="post-side.html">Side Post<span class="new-page">New</span></a></li>
												<li><a href="post-corner.html">Corner Post<span class="new-page">New</span></a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="sub-menu-down"><a href="javascript:void(0);">Blog <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="javascript:void();">Page Layout <i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a href="javascript:void();">No Sidebar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list.html">Blog List</a></li>
														<li><a href="blog-grid.html">Blog Grid</a></li>
														<li><a href="blog-grid-wide.html">Blog Grid Wide</a></li>
													</ul>	
												</li>
												<li><a href="javascript:void();">2 Columns <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list-right-sidebar.html">Blog List</a></li>
														<li><a href="blog-grid-right-sidebar.html">Blog Grid</a></li>
													</ul>	
												</li>
												<li><a href="javascript:void();">3 Columns <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list-both-sidebar.html">Blog List</a></li>
														<li><a href="blog-grid-both-sidebar.html">Blog Grid</a></li>
													</ul>	
												</li>
											</ul>
										</li>
										<li><a href="javascript:void();">Blog Sidebar <i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a href="javascript:void();">No Sidebar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list.html">Blog List</a></li>
														<li><a href="blog-grid.html">Blog Grid</a></li>
													</ul>	
												</li>
												<li><a href="javascript:void();">Left Sidebar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list-left-sidebar.html">Blog List</a></li>
														<li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
													</ul>	
												</li>
												<li><a href="javascript:void();">Right Sidebar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list-right-sidebar.html">Blog List</a></li>
														<li><a href="blog-grid-right-sidebar.html">Blog Grid</a></li>
													</ul>	
												</li>
												<li><a href="javascript:void();">2 Sidebar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-menu">
														<li><a href="blog-list-both-sidebar.html">Blog List</a></li>
														<li><a href="blog-grid-both-sidebar.html">Blog Grid</a></li>
													</ul>	
												</li>
											</ul>
										</li>
									</ul>	
								</li>
								<li class="has-mega-menu "> <a href="javascript:void(0);">Shortcodes<i class="fa fa-chevron-down"></i></a>
									<ul class="mega-menu">
										<li> <a href="javascript:void(0);">Shortcodes</a>
											<ul>
												<li><a href="shortcode-buttons.html">Buttons</a></li>
												<li><a href="shortcode-icon-box-styles.html">Icon box styles</a></li>
												<li><a href="shortcode-pricing-table.html">Pricing table</a></li>
												<li><a href="shortcode-toggles.html">Toggles</a></li>
												<li><a href="shortcode-team.html">Team</a></li>
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Shortcodes</a>
											<ul>
												<li><a href="shortcode-carousel-sliders.html">Carousel sliders</a></li>
												<li><a href="shortcode-image-box-content.html">Image box content</a></li>
												<li><a href="shortcode-tabs.html">Tabs</a></li>
												<li><a href="shortcode-counters.html">Counters</a></li>
												<li><a href="shortcode-light-box.html">Light Gallery</a></li>
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Shortcodes</a>
											<ul>
												<li><a href="shortcode-accordians.html">Accordians</a></li>
												<li><a href="shortcode-dividers.html">Dividers</a></li>
												<li><a href="shortcode-images-effects.html">Images effects</a></li>
												<li><a href="shortcode-testimonials.html">Testimonials</a></li>
												<li><a href="shortcode-magnific-popup.html">Magnific Gallery</a></li>
											</ul>
										</li>
										<li> <a href="javascript:void(0);">Shortcodes</a>
											<ul>
												<li><a href="shortcode-alert-box.html">Alert box</a></li>
												<li><a href="shortcode-icon-box.html">Icon-box</a></li>
												<li><a href="shortcode-list-group.html">List group</a></li>
												<li><a href="shortcode-title-separators.html">title-separators</a></li>
												<li><a href="shortcode-all-widgets.html">Widgets</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li> <a href="javascript:void(0);">Contact us <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="contact.html">Contact us 1</a></li>
										<li><a href="contact-2.html">Contact us 2</a></li>
										<li><a href="contact-3.html">Contact us 3</a></li>
										<li><a href="contact-4.html">Contact us 4</a></li>
									</ul>
								</li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->