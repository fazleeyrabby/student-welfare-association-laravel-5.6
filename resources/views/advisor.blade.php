@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
	 <!-- advisor -->
    <section class="advisor-area">
    	<div class="container">
    		<div class="row">
	            <div class="col-md-12">
	                <div class="section-title text-center">
	                     <div class="section-title mb-100">
		                   <p class="text-danger" style="size: a4; text-align: center;">
		                     <em class="text-success">
		                        <strong style="font-size: 30px;">A</strong>
		                        dvisor
		                     </em>
		                  	</p>
		               		<p>List of all <strong>Advisor</strong></p><hr>
		               </div>
	                </div>
	            </div>
        	</div>
	      <div class="row">
	      		@foreach($advisors as $advisor)
	            <div class="col-xs-12 col-sm-6 col-md-4">
	                <!-- <div class="container"> -->
				  <div class="card bg-light single-advisor">
				    <div class="card-body">
				      <h4 class="card-title">{!! $advisor->name !!}</h4>
				      <p class="card-text">{!! substr($advisor->description,0,40) !!}</p>
				      <a href="{{url('members',$advisor->member_id)}}" class="btn btn-success" class="btn btn-success">See Profile</a>
				    </div>
				    <img class="card-img-bottom" src="./public/assets/backend_asset/profile_pic/{{ $advisor->profile_pic }}" alt="Card image" style="width:100%; height: 250px;">
				  </div>
					<!-- </div> -->
	            </div>
	            @endforeach
	        </div> 
	        {{ $advisors->render() }}
	    </div>
    </section>
@endsection