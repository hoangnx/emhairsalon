<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Store Em Salon Hair</title>
	<link rel="stylesheet" href="{{asset('css/customer/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/customer/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/customer/store.css')}}">
	<link rel="stylesheet" href="{{asset('scss/footer.scss')}}">
</head>
<body>
	<header>
		<div class="header-top d-none d-sm-none d-md-none d-lg-block">
			<div class="container">
				<div class="row">
					<div class=" col-lg-3 icon">
						<a href=""><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-google-plus-square"></i></a>
						<a href=""><i class="fab fa-twitter-square"></i></a>
					</div> 
					<div class=" col-lg-5 line-right ">
						Call for reservation: 024 6687 5115
					</div>
					<div class="col-lg-4 line-left ">
						Opening Hours : 9:00am - 19:00pm
					</div>
				</div>
			</div>
		</div>
		<div class="header-main">
			<nav class="navbar navbar-expand-md navbar-dark bg-dark py-0 ">
				<div class="container">
					<a href="index.html" class="navbar-brand p-0 "><img src="{{asset('images/logo2.png')}}" alt="image lo go Em salon"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse  text-center" id="navNavbar">
						<ul class="navbar-nav ml-auto ">
							<li class="nav-item">
								<a href="/EM_Salon" class="nav-link ">Home</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/service" class="nav-link ">Services</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/gallery" class="nav-link ">Gallery</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/store" class="nav-link active" >Shop</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/blog" class="nav-link" >Blog</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/appointment" class="nav-link btn-appointment" target="_blank">Appointment </a>
							</li>
							<li class="nav-item dropdown" >
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-search"></i>
                                </a>
                                <div id="box_search" class="dropdown-menu ">    
                                    <form name="main_search" action="#" method="POST">
                                        <div class="input-group px-1">
                                            <input type="text" name="char" class="form-control" placeholder="Tìm kiếm...">
                                        </div>
                                    </form>
                                </div>       
                            </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header> 
	<!-- HEADER END -->
	<!-- STORE  -->
	<section class="main-container ">
		<div class="container">
			<div class="row">
				<div class="services-main d-md-flex ">
					<div class="col-md-3 col-lg-3 ">
						<div id="table-affix">
							<div class="text-uppercase p-0 d-none d-sm-none d-md-block d-lg-block" style="color:#ff9900"><h6>Product portfolio</h6></div>
							<div class="box-left-store ">
								<!-- screen tabletdesktop -->
								<ul class="service-left nav flex-column d-none d-sm-none d-md-block ">
									<li class="nav-item show-item "><a class="nav-link" href="#tab-1"> Ghost </a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-2"> Hair dyed </a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-3">Shampoo pair</a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-4"> Ghost</a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-5">Hair dyed</a></li>
								</ul>
							</div>	
						</div>
						
						<!-- screen tabletdesktop end--> 
						<!-- screen mobile start-->
						<div class="d-block d-sm-block d-md-none d-lg-none btn-box">
							<div id="mySidepanel" class="sidepanel">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<ul class="nav">
									<hr>
									<li class="nav-item show-item "><a class="nav-link" href="#tab-1"> Ghost </a></li>
									<hr>
									<li class="nav-item"><a class="nav-link" href="#tab-2"> Hair dyed </a></li>
									<hr>
									<li class="nav-item"><a class="nav-link" href="#tab-3">Shampoo pair</a></li>
									<hr>
									<li class="nav-item"><a class="nav-link" href="#tab-4"> Ghost</a></li>
									<hr>
									<li class="nav-item"><a class="nav-link" href="#tab-2"> Hair dyed </a></li>
									<hr>
								</ul>
							</div>	
							<div class="d-flex justify-content-between align-items-center">
								<span>Product portfolio</span>
								<button class="openbtn" onclick="openNav()">&#9776; </button>
							</div>				
						</div>
						<!-- screen mobile end-->
					</div>	
					<!-- services left -->
					<!-- services right end -->
					<div class="box-right-store main col-12 col-sm-12 col-md-9 col-lg-9 px-0">
						<div id="tab-1" class="tab-content  col-12 col-md-12 col-lg-12">	
							<div class="row d-flex flex-wrap">
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST 1</a>
										<span  class="special-price"> 400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store2.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price"> 450,000 VNĐ </span>
									</div>
								</div>
								<!-- end col  -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store3.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  350,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store9.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  580,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">            
										<div class="quickview-button">
											<img src="{{asset('images/store10.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  250,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store11.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  500,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class=" page  w-100 ">
									<ul class="pagination page-number ">
										<li class="page-item actives">
											<a href="#" class="page-link">1</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">2</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">3</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end tab 1 -->
						<div id="tab-2" class="tab-content  col-12 col-md-12 col-lg-12">	
							<div class="row d-flex flex-wrap">
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST page 2</a>
										<span  class="special-price">  400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store2.jpg')}}" alt=" image store">
											<div class="overlay"></div>

											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  450,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store3.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  350,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store9.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  580,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">            
										<div class="quickview-button">
											<img src="{{asset('images/store10.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  250,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store11.jpg')}}" alt=" image store">
											<div class="overlay"></div>

											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  500,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class=" page  w-100 ">
									<ul class="pagination page-number ">
										<li class="page-item actives">
											<a href="#" class="page-link">1</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">2</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">3</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end tab 2-->
						
						<div id="tab-3" class="tab-content  col-12 col-md-12 col-lg-12">	
							<div class="row d-flex flex-wrap">
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST page 1</a>
										<span  class="special-price">  400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store2.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  450,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store3.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  350,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store9.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  580,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">            
										<div class="quickview-button">
											<img src="{{asset('images/store10.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  250,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>

											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class=" page  w-100 ">
									<ul class="pagination page-number ">
										<li class="page-item actives">
											<a href="#" class="page-link">1</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">2</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">3</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end tab 3 -->
						<div id="tab-4" class="tab-content  col-12 col-md-12 col-lg-12">	
							<div class="row d-flex flex-wrap">
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST page 4</a>
										<span  class="special-price">  400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store2.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  450,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store3.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  350,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class=" page  w-100 ">
									<ul class="pagination page-number ">
										<li class="page-item actives">
											<a href="#" class="page-link">1</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">2</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">3</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end tab 4 -->
						<div id="tab-5" class="tab-content  col-12 col-md-12 col-lg-12">	
							<div class="row d-flex flex-wrap">
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store1.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST page 1</a>
										<span  class="special-price">  400,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store2.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  450,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store3.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  350,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store5.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  300,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store6.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store7.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  380,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store9.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  580,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">            
										<div class="quickview-button">
											<img src="{{asset('images/store10.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  250,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4 ">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store11.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  500,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class="store-item col-6 col-sm-6 col-md-4 col-lg-4">
									<div class="item ">           
										<div class="quickview-button">
											<img src="{{asset('images/store4.jpg')}}" alt=" image store">
											<div class="overlay"></div>
											<div class="col-md-12 quickview-item">
												<a href="#" class="btn " data-toggle="modal" data-target="#quickviewModal">
													Quick view
												</a>
											</div>
										</div>
									</div>
									<div class="product-bottom">
										<a href="quickview.html" class="product-title " target="_blank"> SHEAR REVIVAL GRAY GHOST</a>
										<span  class="special-price">  600,000 VNĐ </span>
									</div>
								</div>
								<!-- end col -->
								<div class=" page  w-100 ">
									<ul class="pagination page-number ">
										<li class="page-item actives">
											<a href="#" class="page-link">1</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">2</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link">3</a>
										</li>
										<li class="page-item">
											<a href="#" class="page-link"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end tab 5 -->
					</div>
				</div>
			</div>
		</div>			
	</section>
	<!-- post modal -->
	<div class="modal fade" id="quickviewModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Quick View</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="view-main d-flex">
						<div class="view-img col-md-6">
							<img src="{{asset('images/store1.jpg')}}" alt="quickview images">
						</div>
						<div class="view-title col-md-6 ">
							<h5>ARCADIAN MATTE PASTE</h5>
							<p><span>CATEGORY:</span> Pomade</p>
							<p><span>BRAND: </span>Blumaan</p>
							<p><span>VOLUME:</span>110 ml</p>
							<p><span>FLAVOR:</span>Gentle scent</p>
							<p>530,000 VNĐ</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER START -->
    <footer class="section-footer py-4"> 
        <!-- share btn start -->
        <div class="share">
            <a href="#" class="share-in"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="share-in"><i class="fab fa-instagram"></i></a>
            <a href="#" class="share-in"><i class="fab fa-twitter"></i></a>
            <a href="#" class="share-in"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="share-in"><i class="fab fa-youtube"></i></a>
            <img src="{{asset('images/plus-button.png')}}" alt="" id="click-show-share">
        </div>
         <!-- share btn end -->

        <!--Go Up Button-->
        <div class="container">
            <div class="go-up ">
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
        <!-- go up button end -->
        <div class=" container ">
            <div class="row d-lg-flex">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 ">
                    <div class="widget">
                        <div class="logo-title">
                            <h4>Newsletter</h4>
                            <hr>
                        </div>
                        <div class="about-widget">
                            <p class="lead">Sign up for the latest news, offters and styles</p>
                            <form action="" method="POST" class="text-center">
                                <input  class="form-control" type="email" placeholder="Your email">
                                <button type="submit" class=" mt-3 btn-subscrite">Subscrite</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 ">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Working House</h4>
                            <hr>
                        </div>   
                        <div class="link-widget ">
                            <ul class="nav flex-column ">
                                <li class="nav-item  ">MONDAY<span>09:00 - 19:00</span> </li>
                                <li class="nav-item">TUESDAY<span>09:00 - 19:00</span></li>
                                <li class="nav-item">WEDNESDAY<span>09:00 - 19:00</span></li>
                                <li class="nav-item">THURSDAY<span>09:00 - 19:00</span></li>
                                <li class="nav-item"> FRIDAY<span>09:00 - 19:00</span> </li>
                                <li class="nav-item">SATURDAY<span>09:00 - 19:00</span></li>
                                <li class="nav-item">SUNDAY<span>09:00 - 19:00</span></li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Site Links</h4>
                            <hr>
                        </div>
                        <ul class="nav flex-column ">
                            <li class="nav-item"><a href="/EM_Salon" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="/EM_Salon/service" class="nav-link" >Services</a></li>
                            <li class="nav-item"> <a href="/EM_Salon/gallery" class="nav-link ">Gallery</a></li>
                            <li class="nav-item"><a href="/EM_Salon/store" class="nav-link" >Shop</a> </li>
                            <li class="nav-item"><a href="/EM_Salon/blog" class="nav-link" >Blog</a></li>
                            <li class="nav-item"><a href="/EM_Salon/appointment" class="nav-link" >Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block ">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                            <hr>
                        </div>
                        <div class=" row recent-post-widget  mb-3">
                            <div class=" col-4 col-sm-3 col-md-3 col-lg-4">
                                <a href="blog.html"><img src="{{asset('images/hair1.png')}}" alt="images blog em salon" ></a>
                            </div>
                            <div class="col-8 col-sm-9 col-md-9 col-lg-8">
                                <p  class="mb-0"><a href="blog.html">Model hair HOT in 2019</a></p>
                                <span>2 May 2019</span>
                            </div>
                        </div>
                        <div class=" row recent-post-widget ">
                            <div class="col-4 col-sm-3 col-md-3 col-lg-4">
                                <a href="blog.html"><img src="{{asset('images/hair2.png')}}" alt="images blog em salon"></a>
                            </div>
                            <div class="col-8 col-sm-9 col-md-9 col-lg-8">
                                <p  class="mb-0"><a href="blog.html">Model hair HOT in 2019</a></p>
                                <span>2 May 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end-col -->
            </div>
        </div>  
        <!-- row end -->
        <div class="coppy-right">
            <div class="container">    
                <p>© 2019 EM Hair Salon All rights reserved.</p>      
            </div>
        </div>
    </footer>
	<!-- FOOTER END -->
	<script src="{{ asset('js/customer/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/customer/popper.min.js') }}"></script>
	<script src="{{ asset('js/customer/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/customer/all.min.js') }}"></script>
	<script src="{{ asset('js/customer/store.js') }}">  </script>  
	<script>
		function openNav() {
			document.getElementById("mySidepanel").style.width = "200px";
		}

		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
	
</body>
</html>