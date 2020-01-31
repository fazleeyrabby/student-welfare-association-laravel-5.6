@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
	
    <div class="breadcrum-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav role="navigation" class="breadcrumbs">
                        <ul>
                            <!-- <li><a href="{{ url('/')}}" title="Home">Home</a></li> -->
                            <li></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="siglepackage-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">      
                    <div class="" style="background:#ffffff;">
                        <section id="description" class="">
                        	@foreach($constitutions as $constitution)
                            <article>
                                <div class='text-wrap'>
                                	<h2>{{ $constitution->constitution_heading }}</h2>
                                    <h4 style="margin-top:37px;" class="text-success">Description</h4>
                                    <p style="text-align: justify;">
                                        {!! $constitution->constitutiont_description !!}
                                    </p>
                                </div>
                            </article><hr>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection