@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')

<section class="journalpart samemarign15">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            @if(isset($article))
                <div class="metajournalheader">
                    <h3>{!! $article->article_title !!}</h3>
                    <span></span>
                </div>
                <div class="viewjournaldescriptiob">
                    <h3>Abstract</h3>
                    <p style="text-align: justify;"> {!! strip_tags($article->article_description) !!} </p>
                </div>
                <div class="keywordsearchjournal">
                    <h3>Keywords</h3>
                    <ul>
                        <li>{!! $article->author_name !!}</li>
                    </ul>
                </div>
                <div class="fulltextpdf">
                    <h3>Full Text</h3>
                    <a href="../../public/assets/backend_asset/filetoupload/{{ $article->filetoupload }}">Download this PDF file</a>
                </div>
            @elseif(isset($journal))
                <div class="metajournalheader">
                    <h3>{!! $journal->journal_title !!}</h3>
                    <span></span>
                </div>
                <div class="viewjournaldescriptiob">
                    <h3>Abstract</h3>
                    <p style="text-align: justify;"> {!! strip_tags($journal->journal_description) !!} </p>
                </div>
                <div class="keywordsearchjournal">
                    <h3>Keywords</h3>
                    <ul>
                        <li>{!! $journal->user_author_name !!}</li>
                    </ul>
                </div>
                <div class="fulltextpdf">
                    <h3>Full Text</h3>
                    <a href="../../public/assets/backend_asset/userjournal_file/{{ $journal->filetoupload }}">Download this file</a>
                </div>
            @endif
            </div>
            <div class="col-md-4">
                <div class="jurnalsidebar">
                    <div class="single-sidebar latestnew">
                        <h3>Latest Blog</h3>
                         <ul>
                                @foreach($latest_categories as $latest_category)
                                <div class="latestewsingle">
                                    <div class="imgarleates">
                                        <a href="{{ url('journal-category',$latest_category->category_id) }}">
                                        <img src="../../public/assets/backend_asset/category_img/{{ $latest_category->category_img }} " style="height: 100px; width:100px;"></a>
                                    </div>
                                    <div class="newarticlesjournal">
                                        <h3><a href="{{ url('journal-category',$latest_category->category_id) }}">{{ substr($latest_category->category_name,0,30) }}</a></h3>
                                        <span>{{ $latest_category->created_at }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection