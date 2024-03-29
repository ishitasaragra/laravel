<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('website/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{url('website/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />

  <!-- font awesome style -->
  <link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="{{url('website/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css')}}" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="{{url('website/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css')}}">
  <!-- Custom styles for this template -->
  <link href="{{url('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('website/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

@include('sweetalert::alert')

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index">
              <img src="{{url('website/images/logo.png')}}" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="treatment">Treatment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor">Doctors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial">Testimonial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact">Contact Us</a>
                  </li>
				  
				  
                </ul>
              </div>
              <div class="quote_btn-container">
			  <div class="user_option">
			  @if(session()->has('userid'))
			    <a href="profile">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    hii..{{session('name')}}
                  </span>
                </a>
				<a href="userlogout">
				<i class="fa fa-user" aria-hidden="true"></i>
				<span>
				Logout
				</span>
				</a>
				@else
                <a href="login">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
				@endif
				</div>
                
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->