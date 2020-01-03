<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>8990 FTDH Fiber To Deca Homes</title>
<link rel="icon" href="{{url('public/setups')}}/{{$setups->image}}" type="image/png">
<link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/fontawesome/css/fontawesome.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/css/animate.css')}}" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
  $(window).on('scroll', function(){
    if ($(window).scrollTop()) {
      $('header').addClass('headerAnimate');
    }
    else{
      $('header').removeClass('headerAnimate');
    }
  })
</script>

</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <!-- <div class="container"> -->
    <div class="header_box">
      <div class="logo"><a href="#"><img src="{{url('public/setups')}}/{{$setups->image}}" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
        @foreach($cats as $cat)
			  <li><a href="#{{$cat->slug}}" class="scroll-link">{{$cat->title}}</a></li>
        @endforeach
			  <li><a href="#contact" class="scroll-link">Contact Us</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  <!-- </div> -->
</header>
<!--Header_section-->

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont">
              {!! $home->slogan !!}
              <div>{!! $home->description !!}</div>
              <div style="margin-top: 50px; display: flex;">
                <a href="#{{$home->link}}" class="inquire">Inquire Now</a>
                <a href="#{{$home->link}}" class="read_more2">Read more</a>
              </div>
            </div>
          </div>
          <div class="top_right_cont col-lg-7 col-sm-5">
		        <img src="{{url('public/contents')}}/{{$home->image}}" class="zoomIn wow animated">
            <p class="animated shake wow">
              New service to offer soon!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->

<section id="about-us"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>ABOUT FTDH</h2>
    <div class="inner_section">
	<div class="row">
    <div class=" col-lg-5 col-md-4 col-sm-4 col-xs-12 pull-right">
      <video width="100%" controls class="delay-03s animated wow zoomIn">
        <source src="{{url('blog/8990 FTDH -- Fiber to Deca Homes.mp4')}}" type="video/mp4">
      </video>
      <!-- <img src="{{url('public/img/about-img.j
        pg')}}" class="img-circle delay-03s animated wow zoomIn" alt=""> -->
    </div>
    	<div class=" col-lg-6 col-md-7 col-sm-7 col-xs-12 pull-left">
      	<div class=" delay-01s animated fadeInDown wow animated">
		     <h3>What FTDH - Fiber To Deca Homes is...</h3><br/>
          <p>FTDH or Fiber to Deca Homes is an exclusive brand name for all Fiber to the Home Internet and Cable TV Services for 8990 Housing Development projects throughout the Philippines as part of its amenities and facilities.</p>
        </div>
        <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a>
        </div>
      </div>
    </div>
      <div class="row benefits_container">
        <div class="col-lg-4" style="text-align: center;">
          <img style="width: 130px;"
         class="delay-03s animated wow zoomIn"
         src="{{url('public/img/speed.png')}}">
         <p class="benefits_info" style="margin-top: 20px">
          <h1 class="benefit_title delay-03s animated fadeInUp wow">FAST AND RELIABLE FIBER CONNECTION</h1>
          <span class="delay-03s animated fadeInUp wow">With our state of the art fiber network, we can guarantee a fast and reliable connection for our valued subscribers</span>
         </p>
        </div>
        <div class="col-lg-4" style="text-align: center;">
         <img style="width: 130px;"
         class="delay-06s animated wow zoomIn"
         src="{{url('public/img/datacaps.png')}}">
         <p class="benefits_info" style="margin-top: 20.5px">
          <h1 class="benefit_title delay-06s animated fadeInUp wow">NO DATA CAPPING</h1>
          <span class="delay-06s animated fadeInUp wow">No monthly cap. No ISP Service throttling. Enjoy your Unlimited Fiber Connection to the fullest.</span>
         </p>
        </div>
        <div class="col-lg-4" style="text-align: center;">
        <img style="width: 130px;"
         class="delay-09s animated wow zoomIn"
         src="{{url('public/img/maintainance1.png')}}">
         <p class="benefits_info" style="margin-top: 18px">
          <h1 class="benefit_title delay-09s animated fadeInUp wow">24/7 STANDBY TECHNICAL SUPPORT</h1>
          <span class="delay-09s animated fadeInUp wow">All of our 8990 FTDH xcfefdeServices are with standby 24/7 Technical Support. We are committed to provide strong fiber connections and quality 24/7 Technical Support Services.</span>
         </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="services">
  <div class="service_container">
    <img style="width: 100%; margin-top: 0px" src="{{url('public/img/curveshadow.png')}}">
      <h1>Our Services</h1>
    <h2>Bundles and Services</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-3 mrgTop">
            <div class="card">
              <div class="service_block">
                <div class="service_icon delay-03s animated wow  zoomIn"> <span><img src="{{url('public/img/services/bundleB.png')}}"></span> </div>
                <h3 class="animated fadeInUp wow">FIBER BUNDLE B</h3>
                <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
              </div>
            </div>
        </div>
        <div class="col-lg-3 mrgTop">
        <div class="card">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><img src="{{url('public/img/services/router1.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">FIBER ALL-IN</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
        <div class="col-lg-3 mrgTop">
          <div class="card">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow zoomIn"> <span><img src="{{url('public/img/services/speed.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">FIBER SPEED</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mrgTop">
          <div class="card">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><img src="{{url('public/img/services/cabletv.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">CABLE TV</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
      </div>
	   <div class="row">

        <div class="col-lg-3 mrgTop">
          <div class="card">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow zoomIn"> <span><img src="{{url('public/img/services/ipcamera.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">IP CAMERA</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
        <div class="col-lg-3 mrgTop">
          <div class="card">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow zoomIn"> <span><img src="{{url('public/img/services/bundleA.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">FIBER BUNDLE A</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
        <div class="col-lg-3 mrgTop">
          <div class="card">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><img style="width: 70px; margin-top: 20px" src="{{url('public/img/services/prepaid.png')}}"></span> </div>
            <h3 class="animated fadeInUp wow">PREPAID INTERNET</h3>
            <ul class="list animated fadeInDown wow">
                  <li style="background-color: #f7f8f4">Fast and Reliable Fiber Connection</li>
                  <li>No Data Capping</li>
                  <li style="background-color: #f7f8f4">24/7 Support</li>
                  <li>
                    <button>Choose your plan</button>
                  </li>
                </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->

<!-- Portfolio -->
<section class="page_section team" id="promos-and-offers"><!--main-section team-start-->
  <div class="container">
    <h1>DISCOUNTS</h1>
    <h2>Promo and Offers</h2>
    <div class="team_section clearfix">
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('public/img/promo1.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)">Inquire Now</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">CCTV CAMERA PACKAGE</h3>
      </div>
      <div class="team_area">
        <div class="team_box  wow fadeInDown delay-06s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('public/img/promo2.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)">Inquire Now</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">INTERCOM IN URBAN DECA</h3>

      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{url('public/img/promo3.jpg')}}" alt="">
          <ul>
            <li><a href="javascript:void(0)">Inquire Now</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">SMART DECA HOMES</h3>

      </div>
    </div>
  </div>
</section>
<!--/Portfolio -->

<section class="page_section" id="subscriber"><!--page_section-->
  <h1 style="margin-bottom: 10px">Complements</h1>
  <h2>Happy Clients</h2>
<!--page_section-->
<div class="subscriber_card_container">
  <div class="subscriber_card" style="height: 300px">
    <p>
      “Thanks to SYMPH, our website has been improved to attract more subscribers! SYMPH team really cared about each issue of the project, and tried to complete it in the best way they could.”
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person1.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Yoriko Ueda</span>
        <br>
        <span class="subscriber_location">Founder and CEO, Venturas Ltd.</span>
      </p>
    </div>
  </div>
  <div class="subscriber_card" style="height: 400px">
    <p>
      “Dave, Albert and the amazing team at Symph have been instrumental in bringing our product to the market. They boast a unique mix of deep technical, design and project expertise, professionalism and a drive to succeed together that is hard to find anywhere else. Highly recommended and would definitely work with them again.”
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person2.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Joelson Fabian</span>
        <br>
        <span class="subscriber_location">Founder and CEO, OnlyNote</span>
      </p>
    </div>
  </div>
  <div class="subscriber_card" style="height: 420px">
    <p>
      "...The (eFOI) portal has never been down and is very reliable. Both the public and government agencies appreciate how the interface is very user-friendly. Symph’s team has provided great help before, during, and even post-launch—making it very easy to solve any issues quickly."
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person3.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Michelle Arianne M. Manza</span>
        <br>
        <span class="subscriber_location">Freedom of Information Engagement Lead, Presidential Communications Operations Office</span>
      </p>
    </div>
  </div>
  <div class="subscriber_card" style="height: 545px">
    <p>
      "One of the hurdles in property management is keeping track of transactions and creating a process where I can streamline operations to minimize cost of manpower. Symph helped me create a system to address this need. Now we have a working Property management system which gives us an updated day to day report, keeps our Alpha list in tact, tracks expenses and disbursements, all in one system. The system helps in organizing and streamlining the process."
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person4.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Eppie Acusar</span>
        <br>
        <span class="subscriber_location">Managing Director, iBuild Property Management Corporation</span>
      </p>
    </div>
  </div>
</div>
</section>
<!--client_logos-->

<section class="page_section team" id="blog"><!--main-section team-start-->
  <div class="container">
    <h1>TESTIMONIAL</h1>
    <h2>Latest Blog</h2>
  <div style="text-align: center">
    <video width="80%" controls class="delay-03s animated wow zoomIn">
      <source src="{{url('public/blog/8990 FTDH Subscribers Reviews.mp4')}}" type="video/mp4">
    </video>
  </div>

  </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">
		 <div class="contact_info">
                            <div class="detail">
                                <h4>FTDH Command Center</h4>
                                <p>{{ $setups -> address }}</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>{{ $setups -> contact }}</p>
                            </div>
                            <div class="detail">
                                <h4>Email Us</h4>
                                <p>{{ $setups -> email }}</p>
                            </div>
                        </div>

          <ul class="social_links">
            @foreach($socials as $key=>$social)
            <li class="{{$fa[$key]}} animated bounceIn wow delay-03s">
              <a href="{{ $social }}"><i class="fa fa-{{$fa[$key]}}"></i></a></li>
            @endforeach
          </ul>

        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
            <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn" type="submit" value="send message">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © {{ date('Y') }}, <a href="http://http://www.itechrar.com">ITECH-RAR Solutions Inc.</a></span> </div>
  </div>
</footer>

<script type="text/javascript" src="public/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="public/js/jquery.nav.js"></script>
<script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="public/js/jquery.isotope.js"></script>
<script type="text/javascript" src="public/js/wow.js"></script>
<script type="text/javascript" src="public/js/custom.js"></script>

</body>
</html>
