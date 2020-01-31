@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<section class="journalpart aboutmargin40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jurnalmission">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="missionbodyjournal">
                                <h3></h3>
                                      <h6>
                                         <p>
                                            <em class="text-success">
                                               <strong style="font-size: 30px;color: #19C880;">A</strong>bout us<hr>
                                            </em>
                                         </p>
                                      </h6>
                                <p style="text-align:justify;">{{ strip_tags($about->description) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection