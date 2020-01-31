@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<section class="advisor-area">
<div class="container">
  <div class="section-title text-center" >
     <div class="section-title mb-100">
      <p class="text-danger" style="size: a4; text-align: center;">
         <em class="text-danger">
            <strong style="font-size: 30px;">G</strong>
         </em>
         <em class="text-success">
            <strong style="font-size: 30px;"></strong>
            allery
         </em>
      </p>
      <p class="text-success">List of Organization program<strong>Gallery</strong></p><hr>
   </div>
 </div>

  <div class="row text-center text-lg-left">
      <div class="col-md-12">
         @foreach($galleries as $gallery)
            <div class="section-title" style="padding: 0 0 20px 0px;">
               <h2>{{ $gallery->pro_name }}</h2>
            </div>
            @php 
               $images =explode(',',$gallery->img);
            @endphp
            <div class="row">
               @foreach($images as $image)
                  <div class="col-lg-3 col-md-4 col-6">
                     <a href="public/assets/backend_asset/gallery_img/{{ $image }}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="public/assets/backend_asset/gallery_img/{{ $image }}" alt="">
                     </a>
                  </div>
               @endforeach
         </div>
         @endforeach

      </div>
  </div>
   {{ $galleries->render() }}
</div>
<!-- /.container -->
</section>

@endsection