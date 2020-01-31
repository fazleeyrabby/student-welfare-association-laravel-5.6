@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')

<section class="journalpart samemarign15">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
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
                    <!-- <a href="{{ url('dynamic-pdf',$article->article_id) }}">Download this PDF file</a> -->
                    <a href="../public/assets/backend_asset/userjournal_file/{{ $journal->filetoupload }}">Do this PDF file</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jurnalsidebar">
                    <div class="single-sidebar latestnew">
                        <h3>Latest Journal News</h3>
                        <ul>
                            
                            @foreach($articles as $article)
                            <div class="latestewsingle">
                                <div class="imgarleates">
                                    <a href="{{ url('view-article',$article->article_id) }}">
                                    <img src="../../public/assets/backend_asset/article_img/{{ $article->article_img }} " style="height: 100px; width:100px;"></a>
                                </div>
                                <div class="newarticlesjournal">
                                    <h3><a href="{{ url('view-article',$article->article_id) }}">{{ substr($article->article_title,0,30) }}</a></h3>
                                    <span>{{ $article->created_at }}</span>
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