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
								@foreach(get_menu('header') as $menu)
									@if(!$menu->sub)
									<li> <a href="javascript:void(0);"> {{$menu->name}}</a>	 
									</li>
									@else
										<li class="sub-menu-down"><a href="javascript:void(0);">{{$menu->name}} <i class="fa fa-chevron-down"></i></a>
											<ul class="sub-menu">
										@foreach($menu->sub as $menu2)
											@if($menu2->sub)
												@foreach($menu2->sub as $menu3)
													<li><a href="javascript:void();">{{$menu2->name}} <i class="fa fa-angle-right"></i></a>
														<ul class="sub-menu">
															@if($menu3->sub)
															<li><a href="javascript:void();">{{$menu3->name}} <i class="fa fa-angle-right"></i></a>
																<ul class="sub-menu">
															@foreach($menu3->sub as $menu4)
																<li><a href="blog-list.html">{{$menu4->name}}</a></li>
															@endforeach
																</ul>	
															</li>
															@else
																<li><a href="blog-grid-wide.html">{{$menu3->name}}</a></li>

															@endif


														</ul>
													</li>
												@endforeach
											@else 
												<li> <a href="javascript:void(0);"> {{$menu2->name}}</a>
												</li>
											@endif
										@endforeach
											</ul>	
										</li>
									@endif
								@endforeach
				
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->