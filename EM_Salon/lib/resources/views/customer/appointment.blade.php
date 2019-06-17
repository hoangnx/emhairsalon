<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EM Hair Salon - Book An Appointment</title>
  <link rel="stylesheet" href="{{asset('css/customer/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/customer/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/customer/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/customer/appointment.css')}}">
</head>
<body>
	<!-- HEADER -->
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="header-left col-12 col-sm-12 col-md-12 col-lg-12 px-0 ">
           <div class="logo">
            <a href="/EM_Salon"><img src="images/logo2.png" alt="lo go Em Hair Salon"></a>      
          </div>
          <div class="header-item col-12">
            <div class="address col-12 col-sm-4 col-md-4 col-lg-4 mb-2">
              <i class="fas fa-map-marker-alt"></i>
              <span>53 Pho Duc Chinh-Ba Dinh-Ha Noi</span>
            </div>
            <div class="pone col-12 col-sm-4 col-md-4 col-lg-4 mb-2">
              <i class="fas fa-phone"></i>
              <span>02466875115</span>
            </div>
            <div class="emai col-12 col-sm-4 col-md-4 col-lg-4 mb-2">
              <i class="fas fa-envelope"></i>
              <span>Email: emhairsalon@reach.org.vn</span>
            </div>
          </div>	
        </div>
      </div>
    </div>
  </div>		
</header>
<!-- HEADER END -->
<div class="container">
  <div class="row">
    <div class="col-12 offset-sm-1 col-sm-10 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
      @if(isset($errors))
          @foreach($errors->all() as $er)
              <p class="alert alert-danger">{{$er}}<p>
          @endforeach
      @endif
    </div>
  </div>
</div>

<!--APPOINTMENT START-->
<section id="section-appointment">
  <div class="container">
    <div class="tab-content" >
      <div class="tab-pane active" id="booking">
        <div class="tab-main">
          <form class="form-horizontal col-12 offset-sm-1 col-sm-10 col-md-10 offset-md-1 col-lg-6 offset-lg-3" method="POST">
            @csrf
            <p class="theme-text">Please enter your info below </p>
            <div class="customer-info-block">
              <div class="form-group d-flex">
                <div class='gender-container col-4 col-sm-4 col-md-4 col-lg-4 p-0 '>
                  <select id ="gender" name="cus_gender" class="form-control selec2 "  data-minimum-results-for-search="-1">
                    <option value = "2" selected>-Your title-</option>
                    <option value = "1">Mr</option>
                    <option value = "0">Mrs/Miss</option>
                  </select>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 full-name ">
                  <input  type="text" name="cus_name" maxlength="50" value="" placeholder="Full name" id="cus_name" class="form-control"/>
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="cus_email" placeholder="Email" id="email" class="form-control"  value=""/>
              </div>
              <div class="form-group">
                <input type="tel" name="cus_phone" placeholder="Phone number (optional)" id="mobile" class="form-control"  value="" />
              </div>
              <div class="form-group">
                <select id ="brand" name="brand" class="form-control selec2 "  data-minimum-results-for-search="-1">
                  <option value = "brand1" selected>53 Pho Duc Chinh, Ba Dinh, Ha Noi</option>
                  <option value = "brand2">7  Do Trung, Trung Hoa, Cau Giay, Ha Noi</option>
                </select>
              </div>
            </div>
            <!-- end info -->
            <!--selectTime   -->
            <div  id="productSetting" class="row">
              <div class="container px-0">
                <p class="choose-title col-12 col-sm-12 col-md-12 col-lg-12 ">Choose services</p>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                  <select class="js-example-basic-multiple col-12 col-sm-12 col-md-12 col-lg-12 " name="service" multiple="multiple">
                    <option value="section-0">Toner only</option>
                    <option value="section-1">Man Hair Cut Card</option>
                    <option value="section-2">Shampoo Card</option>
                    <option value="section-3">Full head highlight </option>
                    <option value="section-4">Bang's Cut </option>
                    <option value="section-5">Kid hair cut </option>
                    <option value="section-6">Skin Peeling </option>
                    <option value="section-7">Style Hair </option>
                    <option value="section-8">Hair Straightening </option>
                    <option value="section-9">Hair Bleaching</option>
                    <option value="section-10">Standard Shampoo</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="booking-service-info ">
              <div class="booking-info">
                <div class="py-3 theme-text">Appointment date: </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 item-date px-0 mb-3">
                  <input type="date" name="date" id="datePicker" class="form-control col-7 col-sm-7 col-md-7 col-lg-7">         
                </div>
              </div>
              <!-- chon gio dat lich -->
              <div id="selectTime" class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                  <div class="container px-0">
                    <ul class="button-time nav">
                      <li class="nav-item show-item  col-3"><a class="nav-link" href="#tab-1"> Morning</a></li>
                      <li class="nav-item col-3"><a class="nav-link" href="#tab-2">  Afternoon</a></li>
                      <li class="nav-item col-3"><a class="nav-link" href="#tab-3">Evening</a></li>
                    </ul>
                  </div>
                </div>
                <div class="time-main"> 
                  <div class="row">
                    <div class="container px-0">
                      <div class="col-12 col-sm-12 px-0">
                        <p id="time-select">Appointment time(*)</p>
                        <div class="timeFrame container col-12 col-sm-12 p-0">
                          <div id="tab-1" class="box-content">
                            <button type="button " class="btn p-10 full-place">
                              <div class="time">09:00</div>
                              <div class="end-solot" >Full slot</div>
                            </button>
                            <button type="button" class="btn p-10  full-place ">
                              <div class="time">09:15</div>
                              <div class="solot">Full slot</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">09:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">09:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">10:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">10:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">10:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">10:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">11:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">11:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">11:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">11:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">12:00</div>
                              <div class="solot">Avaiable</div>
                            </button> 
                          </div>
                          <!-- box morning -->
                          <div id="tab-2" class="box-content">
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">12:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">12:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">12:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">13:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">13:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">13:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">13:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">14:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">14:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">14:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">14:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">15:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">15:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">15:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">15:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">16:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">16:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">16:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">16:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">17:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">17:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">17:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">17:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                          </div>
                          <!-- box afternoon-->
                          <div id="tab-3" class="box-content">
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">18:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">18:15</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">18:30</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">18:45</div>
                              <div class="solot">Avaiable</div>
                            </button>
                            <button type="button" class="btn p-10 still-place">
                              <div class="time">19:00</div>
                              <div class="solot">Avaiable</div>
                            </button>
                          </div>
                          <!-- box evening -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- note start -->
              <div id="comment col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                  <div class="container px-0">
                    <p class="choose-title col-12 col-sm-12 col-md-12 col-lg-12 " style="color:  #007bff;">Note:</p>
                    <div class=" mb-3 col-12 col-sm-12 col-md-12 col-lg-12">
                      <textarea id="note" name="note" class="form-control" rows="2" placeholder="Write your message"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center  col-12 col-sm-12 col-md-12 col-lg-12 px-0">
                <button type="submit" class="btn book btn-block" id="ok" >
                  <i class="far fa-calendar-alt"></i>
                  <span>Book Appointment</span> 
                </button>
              </div>
            </div>
          </form> 
          <!-- form end -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPOINTMENT END--> 
<!-- FOOTER START -->
<footer class="section-footer py-4"> 
  <!-- share btn start -->
  <div class="share">
    <a href="#" class="share-in"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="share-in"><i class="fab fa-instagram"></i></a>
    <a href="#" class="share-in"><i class="fab fa-twitter"></i></a>
    <a href="#" class="share-in"><i class="fab fa-google-plus-g"></i></a>
    <a href="#" class="share-in"><i class="fab fa-youtube"></i></a>
    <img src="img/plus-button.png" alt="" id="click-show-share">
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
              <li class="nav-item">MONDAY<span>09:00 - 19:00</span> </li>
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
              <a href="blog.html"><img src="img/hair1.png" alt="images blog em salon" ></a>
            </div>
            <div class="col-8 col-sm-9 col-md-9 col-lg-8">
              <p  class="mb-0"><a href="blog.html">Model hair HOT in 2019</a></p>
              <span>2 May 2019</span>
            </div>
          </div>
          <div class=" row recent-post-widget ">
            <div class="col-4 col-sm-3 col-md-3 col-lg-4">
              <a href="blog.html"><img src="img/hair2.png" alt="images blog em salon"></a>
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
<script src="{{ asset('js/customer/select2.min.js') }}"></script>
<script src="{{ asset('js/customer/appointment.js') }}"></script>
<script>

</script>
</body>
</html>