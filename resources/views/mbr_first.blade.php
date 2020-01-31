@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<!-- advisor -->
<section class="advisor-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <!-- Grid row -->
            <!-- Grid column -->
           
            <div class="justify-content-center mb-5">
           
               <a href="{{ url('/mbr-first') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">1st</button></a>
           
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button></a>
               <a href="{{ url('/x-mbr-by-yr') }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button></a>
            </div>
          
            <!-- Grid column -->
            <div class="section-title text-center">
               <div class="section-title mb-100">
                  <p class="text-danger" style="size: a4; text-align: center;">
                     <em class="text-danger">
                     <strong style="font-size: 30px;">X</strong>
                     </em>
                     <em class="text-success">
                     <strong style="font-size: 30px;">M</strong>
                     ember
                     </em>
                  </p>
                  <p>List of all <strong>X-Member</strong></p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($mbr_first as $mbr_firs)
         <div class="col-md-4">
            <div class="card single-advisor">
               <div class="card-header">{!! $mbr_firs->name !!}</div>
               <div class="card-body">
                  <img class="card-img-bottom" src="./public/assets/backend_asset/profile_pic/{{ $mbr_firs->profile_pic }}" alt="Card image" style="width:100%; height: 250px;">
               </div>
               <div class="card-footer">
                  <p class="card-text">{!! substr($mbr_firs->description,0,40) !!}</p>
                  <a href="{{url('members',$mbr_firs->member_id)}}" class="btn btn-success">See Profile</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      {{ $mbr_first ->render() }}
   </div>
</section>
@endsection