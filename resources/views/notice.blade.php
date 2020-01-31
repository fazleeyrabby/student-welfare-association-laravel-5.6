@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
	 <section class="journalpart samemarign15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="metajournalheader">
                        <h3>{!! $notice->title !!}</h3><hr>
                    </div>
                    <div class="viewjournaldescriptiob">
                        <p style="text-align: justify;"> {!! $notice->description !!} </p>
                    </div>
                    <div class="keywordsearchjournal"><hr>
                        <h3>Keywords</h3>
                        <ul>
                            <li>{!! $notice->author_name !!}</li>
                        </ul>
                         <div class="fulltextpdf" style="padding: 10px;">
                        <h3>Full Text Download</h3>
                        <a href="../public/assets/backend_asset/notice/{{ $notice->filetoupload }}"><i class="fa fa-download" aria-hidden="true"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection