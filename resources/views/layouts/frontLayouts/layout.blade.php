<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      <link rel="icon" href="{{ asset('assets/backend_asset/production/images/swa.ico') }}" type="image/ico" />
      <title>@yield('title')</title>
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/js/jquery-1.12.4.min.js') }} "></script>
      <!-- <script type="text/javascript" src=" {{ asset('public/assets/frontend_assets/pagination/jquery-3.3.1.slim.min.js') }} "></script> -->
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/pagination/bootstrap.min.js') }} "></script>
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/bootstrap.min.css') }} " />
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/font.css') }} " />
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/font-awesome.min.css') }} " />
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/owl.carousel.min.css') }} " />
      <link rel="stylesheet" href="{{ asset('assets/frontend_assets/pagination/bootstrap.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/style.css') }} " />
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/header/main.css') }} " />
      <link rel="stylesheet" href=" {{ asset('assets/frontend_assets/css/styles.css') }} " />
   </head>
   <body>
      <div class="preloader">
         <div class="status">
            <div class="status-mes"></div>
         </div>
      </div>
      <header class="site-header">
         <div class="top-header-bar">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center">
                     <div class="header-bar-email d-flex align-items-center">
                        <i class="fa fa-envelope"></i><a href="#">tuanna.design@gmail.com</a>
                        <img>
                     </div>
                     <!-- .header-bar-email -->
                     <div class="header-bar-text lg-flex align-items-center">
                        <p><i class="fa fa-phone"></i>001-1234-88888 </p>
                     </div>
                     <!-- .header-bar-text -->
                  </div>
                  <!-- .col -->
                  <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                     <div class="header-bar-search">
                        <form class="flex align-items-stretch">
                           <input type="search" placeholder="What would you like to learn?">
                           <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- .header-bar-search -->
                     <div class="header-bar-menu">
                        <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                           <?php
                               $user_id=Session::get('user_id');
                           ?>
                           <?php if($user_id != NULL) { ?>
                              <li><a href="{{ url('/user-dashboard') }}">Dashboard</a></li>
                              <?php } else { ?>
                              <li><a href="{{ url('/registration') }}">Register</a></li>
                              <li><a href="{{ url('/user-login') }}" style="text-decoration: none;">Login</a></li>
                           <?php } ?>
                           <!-- <a href="" title="view profile">
                           <img class="rounded-circle" height="50px" width="50px" src="">
                           </a> -->
                           <!-- <li><a href="">Dashboard</a></li> -->
                           <!-- <li><a href="">Logout</a></li> -->
                           
                           <!-- <li><a href="">Dashboard</a></li> -->
                          
                        </ul>
                     </div>
                     <!-- .header-bar-menu -->
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- .container-fluid -->
         </div>
         <div class="top-header">
            <div class="container">
               <div class="row tophaderrow">
                  <div class="col-md-12">
                     <div class="text-center">
                        <p style="color: yellow; font-size: 1.50rem;"> সত্য-সুন্দরের পথে... </p>
                        <h3 style="color: #f8f9fa;text-shadow: 10px 19px 13px #4CAF50;font-size: 2.85rem;">বহরমপুর ইউনিয়ন স্টুডেন্ট ওয়েলফেয়ার এসোসিয়েশন</h3>
                        <em style="color: red; font-size: 1.50rem;">স্থাপিতঃ ২০০৮  খ্রিঃ</em>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="menu-header bg-light">
         <div class="container-fluid">
         <!--Navbar -->
         <nav class="mb-1 navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img class="rounded-circle" style="height: 50px;width: 50px;" src="{{ url('assets/frontend_assets/images/logo.jpg') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
               aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <p>
                     <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;font-size: medium;" href="{{ url('/') }}">Home</a>
                     </p>
                  </li>
                  <li class="nav-item active">
                     <p>
                     <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;font-size: medium;" href="{{ url('about-info') }}">about us</a>
                     </p>
                  </li>
                  <li class="nav-item">
                     <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;" href="{{ url('/x-member') }}">x member</a>
                     </p>
                  </li>
                  <li class="nav-item">
                     <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;" href="{{ url('/executive-member') }}">executive member</a>
                     </p>
                     
                  </li>
                  <li class="nav-item">
                     <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;" href="{{ url('/cnstuon') }}">constitution</a>
                     </p>
                  </li>
                  <li class="nav-item">
                     <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;" href="{{ url('advisor') }}">advisor</a>
                     </p>
                  </li>
                  <li class="nav-item">
                     <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;" href="{{ url('/glry') }}">gallery</a>
                     </p>
                  </li>
                  <li class="nav-item">
                    <p>
                        <a class="nav-link text-dark" style="color: black;text-transform: uppercase;text-style:bold;" href="{{ url('/blood-doner') }}">blood donor</a>
                    </p>
                  </li>
                  <li class="nav-item dropdown">
                     <?php
                       $img = Session::get('img');
                     ?>
                     <?php if($user_id != NULL && $img != NULL) { ?>
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" height="50px" width="50px" src="./public/assets/backend_asset/user_img/{{ $img }}"></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">

                        <a class="dropdown-item" href="{{ url('/user-dashboard') }}">My account</a>
                        <a class="dropdown-item" href="{{ url('/user-logout') }}">Log out</a>
                     </div>
                     <?php } ?>
                  </li>
               </ul>
            </div>
         </nav>
         <!--/.Navbar -->
         </div>
      </div>
      @yield('content')
      <footer class="footer" style="background-color: #033C73;">
         <div class="bottom full-width" >
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <nav>
                        <ul style="list-style: none;">
                           <li><a href="{{ url('/') }}" title="About us" >Home</a></li>
                           <li><a href="{{ url('/about-info') }}" title="About us" >About Us</a></li>
                           <li><a href="{{ url('/executive-member') }}" title="Member">Member</a></li>
                           <li><a href="{{ url('/glry') }}" title="Gallery">Gallery</a></li>
                           <li><a href="{{ url('/advisor') }}" title="Advisor">Advisor</a></li>
                           <li><a href="{{ url('/blood-doner') }}" title="Blood Donor">Blood Donor</a></li>
                           <li><a href="{{ url('/') }}" title="Privacy statement">Privacy statement</a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-md-4">
                     <div class="social-icons pull-right">
                        <ul class="" >
                           <li><a href="https://www.facebook.com/profile.php?id=100015918520673" ><i class="fa fa-facebook"></i></a></li>
                           <li><a href="" title="youtube"><i class="fa fa-youtube-square"></i></a></li>
                           <li><a href=""><i class="fa fa-twitter"></i></a></li>
                           <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="" style="margin: 18px 0 20px;border-top: 1px solid #ccc;
                     padding-top: 20px;">
                     <p class="copy">COPYRIGHT @ 2019 SWA </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- </div> -->
         <!--Scroll to top-->  
         <!-- <div class="back-to-top" id="back-to-top" data-toggle="tooltip" data-placement="left"> 
         <i class="fa fa-level-up" aria-hidden="true"></i> 
         </div> -->
      </footer>
      
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/pagination/popper.min.js') }} "></script>
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/js/owl.carousel.min.js') }} "></script>
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/js/bootstrap.bundle.min.js') }} "></script>
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/js/main.js') }} "></script>
      <script type="text/javascript" src=" {{ asset('assets/frontend_assets/js/jquery.slimmenu.min.js') }} "></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $(window).scroll(function () {
                   if ($(this).scrollTop() > 50) {
                       $('#back-to-top').fadeIn();
                   } else {
                       $('#back-to-top').fadeOut();
                   }
               });
               // scroll body to 0px on click
               $('#back-to-top').click(function () {
                   $('#back-to-top').tooltip('hide');
                   $('body,html').animate({
                       scrollTop: 0
                   }, 800);
                   return false;
               });
               
               $('#back-to-top').tooltip('show');
         
         });
      </script>
      <script type="text/javascript">
         $('#member_info').on('show.bs.modal', function (event) {
           var button =  $(event.relatedTarget)
           var institute =  button.data('institute')
           var contact =  button.data('contact')
           var address =  button.data('address')
           var modal =  $(this)
         
           modal.find('.modal-body #institute').val(institute);
           modal.find('.modal-body #contact').val(contact);
           modal.find('.modal-body #address').val(address);
         });
      </script>
      <script type="text/javascript">
         $(function() {
            var selectedClass = "";
            $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
            }, 300);
            });
            });
      </script>
   </body>
</html>