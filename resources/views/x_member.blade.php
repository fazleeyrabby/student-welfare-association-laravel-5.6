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
           @foreach($mbr_yrs as $mbr_yr)
               <a href="{{ url('/mbr-by-yr',$mbr_yr->moy_id) }}"><button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">{{ $mbr_yr->mbr_year }}</button></a>
           @endforeach
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
         @foreach($members as $member)
         <div class="col-md-4">
            <div class="card single-advisor">
               <div class="card-header">{!! $member->name !!}</div>
               <div class="card-body">
                  <img class="card-img-bottom" src="./public/assets/backend_asset/profile_pic/{{ $member->profile_pic }}" alt="Card image" style="width:100%; height: 250px;">
               </div>
               <div class="card-footer">
                  <p class="card-text">{!! substr($member->description,0,40) !!}</p>
                  <a href="{{url('members',$member->member_id)}}" class="btn btn-success">See Profile</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      {{ $members->render() }}
   </div>
</section>
@endsection