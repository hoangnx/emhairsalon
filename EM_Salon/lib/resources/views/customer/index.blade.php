<?php
    use App\Http\Controllers\Frontend\FrontendController;
?>
@extends('customer.layout')

@section('title', 'Homepage EM Hair Salon')

@section('content')
    <!-- carousel slide -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" data-pause ="false">
        <ol class="carousel-indicators cricle">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <div class="container">
                    <div class="carousel-caption text-right mb-5">
                        <p class="lead">100% of profits made at the salon go towards funding vocational training for disadvantaged youths studying at REACH, including victims of human trafficking and domestic violence. </p>
                        <a href="/EM_Salon/appointment" class="btn btn-appointment btn-lg">Appointment </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-2">
                <div class="container">
                    <div class="carousel-caption text-right mb-5">
                        <p class="lead">Since 2004, REACH has helped improve the lives of over 15,000 young people in Vietnam. </p>
                        <a href="/EM_Salon/appointment" class="btn btn-appointment btn-lg">Appointment </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-3">
                <div class="container">
                    <div class="carousel-caption text-right mb-5">
                        <p class="lead">Our experienced hair stylists specialise in men’s and women’s styling, cutting, colouring and curling services at affordable prices (see our menu in VN/ENG). </p>
                        <a href="/EM_Salon/appointment" class="btn btn-appointment btn-lg">Appointment </a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- carousel end -->

    <!-- ABOUT START-->
    <section id="about">
        <div class="container">
            <div class="row section-about">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="about-title text-left">
                        <h4>WELCOME TO THE BOARD</h4>
                        <h3>WE ARE EM HAIR SALON</h3>
                    </div>
                    <p>
                        EM Hair Salon is top-rated professional hair salon located on beautiful Phan Huy Ich Street in Hanoi's Old Quarter.
                        Our experienced hair stylists specialise in men’s and women’s styling, cutting, colouring and curling services at affordable prices (see our menu in VN/ENG).  They are experienced with all colours and types of hair, including blonde and balayage. 
                    </p>
                    <a href="appointment.html" class="btn btn-appointment">Appointment </a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
                    <div class=" about-img row">
                        <div class="about-iems col-6 col-sm-6 col-lg-6 pr-1">
                            <img src="{{asset('images/img-about.jpg')}}" alt="welcome about us" class="img-fluid">
                        </div>
                        <div class="about-iems col-6 col-sm-6 col-lg-6 pl-1">
                            <img src="{{asset('images/section-about2.jpg')}}" alt="welcome about us" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 ">
                    <div class="about-title text-left">
                        <h4>+84 29 345 678</h4>
                        <h3>WORKING HOURS</h3>
                    </div>
                    <ul class="openinghours">
                        <li>
                            <span>Monday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                        <li>
                            <span>Tuesday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                        <li>
                            <span>Wednesday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                        <li>
                         <span>Thursday</span>
                         <small>09:00 - 19:00</small>
                         </li>
                         <li>
                            <span>Friday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                        <li>
                            <span>Saturday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                        <li>
                            <span>Sunday</span>
                            <small>09:00 - 19:00</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END-->

    <!-- SERVICES START -->
    <section id="section-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="service-title">
                        <h2>Our Services</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid px-0">
                    <div class="wrap-service ">
                        <div class="container">
                            <div class=" wrap-box">
                                @foreach($service_categories as $service_category)
                                    @if($service_category->status == 1)
                                        <div class="wrap-service-item ">
                                            <div class="item1 col-6 col-sm-6 col-md-7 col-lg-7 text-left " style="text-transform: capitalize">{{ $service_category->cate_name }}</div>
                                        <!--     <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div> -->
                                                <div class="item3 col-6 col-sm-6 col-md-5 col-lg-5 text-right"> 
                                                    {{FrontendController::printPriceRange($service_category->cate_id)}} VNĐ 
                                                </div>
                                        </div>

                                    @endif
                                @endforeach

                                <!-- <div class="wrap-service-item ">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Hair cut</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$10 - $20</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Hot perm</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$40 - $70</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Cold perm</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$40 - $70</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Bangs curling</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$5 - 10$</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Hair toner only</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$15 - 20$</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Balayage</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$30 - 40$</div>
                                </div>
                                <div class="wrap-service-item">
                                    <div class="item1 col-6 col-sm-3 col-md-5 col-lg-4">Balayage</div>
                                    <div class="item2 col-0 col-sm-6 col-md-4 col-lg-5"></div>
                                    <div class="item3 col-6 col-sm-3 col-md-3 col-lg-3">$30 - 40$</div>
                                </div> --> 
                                <div class="more-shop">
                                    <a href="/EM_Salon/service" target="_blank" class="btn btn-shop">ALL SERVICES</a>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div> 
            </div>  
        </div>   
    </section>
    <!-- SERVICES END -->

    <!-- SERVICES GALLERY START -->
    <section id="section-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="service-title ">
                        <h2>Our Gallery</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div> 
            <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair1.png"  data-lightbox="my gallery" >
                                <img src="{{asset('images/hair1.png')}}" alt="images go to gallery">
                            </a>        
                        </div>    
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair2.png"  data-lightbox="my gallery" >
                                <img src="{{asset('images/hair2.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair3.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair3.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair4.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair4.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair5.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair5.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair6.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair6.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair7.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair7.png')}}" alt="images go to gallery">
                            </a>      
                        </div>   
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="img/hair8.png" data-lightbox="my gallery" >
                                <img src="{{asset('images/hair8.png')}}" alt="images go to gallery">
                            </a>      
                        </div>  
                        <div class="more-shop col-12 text-center">
                            <a href="/EM_Salon/gallery" target="_blank" class="btn btn-shop">MORE GALLERY</a>
                        </div>      
                    </div>
                </div>
            </div>                 
        </div>
    </section>
    <!-- SERVICES GALLERY END -->

    <!-- SHOP START -->
    <section id="section-shop">
        <div class="row">
            <div class="container">
                <div class="col-12  col-sm-12 col-md-12 col-lg-12">
                    <div class="service-title">
                        <h2>Shop</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-12  col-sm-12 col-md-12 col-lg-12">
                    <div class="row carousel-shop">
                        <div class="col-12  col-sm-12 col-md-12 col-lg-12"> 
                            <div class="carousel-wrap ">
                                <div class="owl-carousel owl-theme mb-3 ">
                                    <div class="item item-none">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop1.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="store.html" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">200,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                    <div class="item item-none ">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop2.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="/EM_Salon/store" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">300,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                    <div class="item item-none">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop3.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="#" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">350,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                    <div class="item item-none">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop4.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="store.html" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">300,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                    <div class="item item-none">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop5.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="/EM_Salon/store" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">300,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                    <div class="item item-none">
                                        <div class="box-carousel">
                                            <a href="shop.html" target="_blank">
                                                <img src="{{asset('images/shop6.jpg')}}" alt="img go to shop">
                                            </a>
                                        </div>
                                        <div class="box-name text-center">
                                            <a href="" title="BY VILAIN GOLD DIGGER">BY VILAIN GOLD DIGGER</a>
                                        </div>
                                        <div class="box-price">
                                            <p class="shop-price text-center">300,000 VNĐ</p>
                                        </div>
                                    </div>
                                    <!-- shop item -->
                                </div>
                                <div class="more-shop">
                                    <a href="/EM_Salon/store" target="_blank" class="btn btn-shop">GO TO SHOP</a>
                                </div>                       
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- SHOP END -->
    <!-- BLOG START -->
    <section id="section-blog">
        <div class="row">
            <div class="container p-0">
                <div class="col-12  col-sm-12 col-md-12 col-lg-12">
                    <div class="service-title">
                        <h2>Blog</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                    <div class="blog-box d-flex">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                            <div class="blog-img">
                                <a href="/EM_Salon/blog" target="_blank"><img src="{{asset('images/blog1.jpg')}}" alt="images go to blog"></a>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 ">
                            <div class="blog-title"><a href="blog.html" target="_blank">Time to meet our awersome staff member! </a></div>
                            <span>Quisque varius in augue in vestibulum. Praeseculis at risus eu rhoncus. Donec hendrerit, cursus a felis. Mardin has to offer! Feel alive! So if you’re fore!</span>
                            <p><a href="single.html" target="_blank">CONTINUE READING</a></p>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="blog-box d-flex">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                            <div class="blog-img">
                                <a href="/EM_Salon/blog" target="_blank"><img src="{{asset('images/blog2.jpg')}}" alt="images go to blog"></a>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 py-0 ">
                            <div class="blog-title"><a href="blog.html" target="_blank">Time to meet our awersome staff member! </a></div>
                            <span>Quisque varius in augue in vestibulum. Praeseculis at risus eu rhoncus. Donec hendrerit, cursus a felis. Mardin has to offer! Feel alive! So if you’re fore!</span>
                            <p><a href="single.html" target="_blank">CONTINUE READING</a></p>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="blog-box d-flex">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
                            <div class="blog-img">
                                <a href="single.html" target="_blank"><img src="{{asset('images/blog3.jpg')}}" alt="images go to blog"></a>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 ">
                            <div class="blog-title"><a href="blog.html" target="_blank">Time to meet our awersome staff member! </a></div>
                            <span>Quisque varius in augue in vestibulum. Praeseculis at risus eu rhoncus. Donec hendrerit, cursus a felis. Mardin has to offer! Feel alive! So if you’re fore!</span>
                            <p><a href="blog.html" target="_blank">CONTINUE READING</a></p>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <div class="more-shop"><a href="blog.html" target="_blank" class="btn btn-shop">READ MORE</a></div>
            </div>
        </div>
    </section>    
    <!-- BLOG END -->

    <!-- CONTACT  -->
    <section id="section-contact" >
        <div class="container">
            <div class="row">    
                <div class="col-12  col-sm-12 col-md-12 col-lg-12">
                    <div class="service-title">
                        <h2>Contact us</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row d-lg-flex">
                        <div class=" location col-12 col-sm-12 col-md-6 col-lg-6 ">
                            <h4>Our Location</h4> 
                            <ul class="nav">
                                @foreach($brands as $brand)
                                <li class="nav-item col-12 col-lg-12">
                                    <p class="mt-3">{{$brand->brand_name}}:</p>
                                    <div class="location-title">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>
                                            {{$brand->brand_address}}
                                        </span>
                                    </div>
                                    <div class="location-title">
                                        <i class="fas fa-phone"></i>
                                        <span>{{$brand->brand_phone}}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope"></i>
                                        <a href="" class="nav-link d-inline-block p-0">{{$brand->brand_email}}</a>
                                    </div>  
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- col end -->
                       <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                            <div class="form  ">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="container">      
                                            <div class="form-group ">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><i class="fas fa-pencil-alt"></i></span>
                                                    <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="button-submit">
                                                <input type="submit" value="Submit" class="btn btn-contact">    
                                            </div>                               
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- col end -->
                    </div>                
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES CONTACT END-->
@stop