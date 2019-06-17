<?php
    use App\Http\Controllers\Frontend\FrontendController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>service Em Salon Hair</title>
	<link rel="stylesheet" href="{{asset('css/customer/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/customer/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/customer/service.css')}}">
    <link rel="stylesheet" href="{{asset('scss/footer.scss')}}">
</head>
<body>
	<!-- HEADER -->
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
					<a href="/EM_Salon" class="navbar-brand p-0 "><img src="{{asset('images/logo2.png')}}" alt="image lo go Em salon"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse  text-center" id="navNavbar">
						<ul class="navbar-nav ml-auto ">
							<li class="nav-item">
								<a href="/EM_Salon" class="nav-link ">Home</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/service" class="nav-link active" >Services</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/gallery" class="nav-link ">Gallery</a>
							</li>
							<li class="nav-item">
								<a href="/EM_Salon/store" class="nav-link" >Shop</a>
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

    <!-- SERVICE START -->
    <div class="wap-service ">
    	<div class="row ">
    		<div class="container ">
    			<div class="service-total d-md-flex">
    				<ul class="service-left  d-none d-sm-none d-md-block d-lg-block col-md-3 col-lg-3">
                        @foreach( $service_categories as $service_category )
                        @if($service_category->status == 1)
    					<li><a href="#{{$service_category->cate_id}}">{{$service_category->cate_name}}</a></li>
                        @endif
                        @endforeach
    					<!-- <li><a href="#tab-2">Hair Straightening</a></li>
    					<li><a href="#tab-3">Hair Bleaching</a></li>
    					<li><a href="#tab-4">Standard Shampoo</a></li>
    					<li><a href="#tab-5">Standard Hair Treatment</a></li>
    					<li><a href="#tab-6">Hair Cold Curling</a></li> -->
    				</ul>
    				<!-- cho mobile ang tablet start-->
    				<div class="mobile-first d-block d-sm-block d-md-none d-lg-none ">
    					<div class="service-title container">
    						<p>Choose service</p>
    						<button>
    							<i class="fas fa-align-right"></i>
    						</button>
    					</div>
    					<div class="container">
    						<ul class="service-left  col-12 col-sm-12 ">
    							<li class="current"><a href="#tab-1">Man Hair Curl</a></li>
    							<li><a href="#tab-2">Hair Straightening</a></li>
    							<li><a href="#tab-3">Hair Bleaching</a></li>
    							<li><a href="#tab-4">Standard Shampoo</a></li>
    							<li><a href="#tab-5">Standard Hair Treatment</a></li>
    							<li><a href="#tab-6">Hair Cold Curling</a></li>
    						</ul>
    					</div>
    				</div>

    				<!-- cho mobile ang tablet end-->
    				<div class="container ml-2 px-0" >
    					<div class="service-content  col-12 col-sm-12 col-md-12 col-lg-12 px-0">
                            @foreach( $service_categories as $service_category )

    						<div id="{{$service_category->cate_id}}" class="tab-content">
                                <!-- Lay tat ca dich vu thuoc danh muc cate_id -->
                                <?php
                                    $arr_services = FrontendController::getAllService($service_category->cate_id);
                                ?>
                                @foreach($arr_services as $service)
                                <!-- Lay tat ca service types theo service_id -->
                                <?php
                                    $arr_service_types = FrontendController::getAllServiceType($service->id);
                                ?>
                                @foreach($arr_service_types as $service_type)

        							<div class="service-item align-items-start">
        								
        									<div class="chart-name col-lg-7  ">
        										<p class="chart-title"><strong>{{$service->name}}</strong> - <span>option: <em>{{$service_type->type_name}}</em></span></p>
        										<p class="chart-item" style="font-size: 13px !important">{{$service->description}}</p>
        									</div>
        									<div class="chart-price col-md-2 col-lg-3 border-0 px-0">
        										<p class="chart-title">{{number_format($service_type->type_price,0,',','.')}} VND</p>
        										<p class="chart-item"><i class="far fa-clock"></i><span class="pl-2">{{$service->duration}} min</span></p>
        									</div>
        								
                                        <div class="col-md-3  col-lg-2 w-100 px-0">
                                            <a href="/EM_Salon/appointment" class="btn btn-warning w-100 d-inline-block px-0" target="_blank">Appointment </a>
                                        </div>       
        								</div>
        							
                                @endforeach
                                @endforeach
    							
    						</div>
                            @endforeach
                        
    						
    					</div>	
    				</div>	
    			</div>

    		</div>
    	</div>
    </div>
    <!-- SERVICE END -->

    <!-- FOOTER START -->
    <footer class="section-footer  py-4"> 
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
                            <p >Sign up for the latest news, offters and styles</p>
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
    <!-- PHẦN SHARE -->
    <div class="share">
    	<a href="#" class="share-in"><i class="fab fa-facebook-f"></i></a>
    	<a href="#" class="share-in"><i class="fab fa-instagram"></i></a>
    	<a href="#" class="share-in"><i class="fab fa-twitter"></i></a>
    	<a href="#" class="share-in"><i class="fab fa-google-plus-g"></i></a>
    	<a href="#" class="share-in"><i class="fab fa-youtube"></i></a>
    	<img src="{{asset('images/plus-button.png')}}" alt="" id="click-show-share">
    </div>

    <script src="{{ asset('js/customer/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/customer/popper.min.js') }}"></script>
    <script src="{{ asset('js/customer/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/customer/all.min.js') }}"></script>
    <script src="{{ asset('js/customer/service.js') }}"></script>
    
</body>
</html>
