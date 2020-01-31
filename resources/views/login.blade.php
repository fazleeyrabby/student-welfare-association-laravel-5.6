@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<!-- <div class="container"> -->
<!-- <div class="col-md-12"> -->
<section class="login-block">
   <div class="container">
   <div class="row" style="background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1)">
      <div class="col-md-4 login-sec">
         <h2 class="text success text-center">Login Now</h2>
         <form class="login-form" action="{{ url('/user-login') }}" method="post">{{ csrf_field() }}
            <div class="form-group">
               <label for="exampleInputEmail1" class="text-uppercase">Email</label>
               <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1" class="text-uppercase">Password</label>
               <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <div class="form-check">
               <label class="form-check-label">
               <input type="checkbox" class="form-check-input">
              <!--  <small>Remember Me</small> -->
               </label>
               <button type="submit" class="btn btn-success btn-login float-right">Submit</button>
            </div>
         </form>
         <div class="copy-text">
            <a href="{{ url('/registration') }}">I already have a membership</a>
         </div>
      </div>
      <div class="col-md-8 banner-sec">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                  <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                     <div class="banner-text">
                        <h2>This is Heaven</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                     <div class="banner-text">
                        <h2>This is Heaven</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                     <div class="banner-text">
                        <h2>This is Heaven</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- </div> -->
<!-- </div> -->
@endsection