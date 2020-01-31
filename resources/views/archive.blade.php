@extends('layouts.frontLayouts.layout')
@section('title','Stamford University Journal')
@section('content')
	 <section class="journalpart samemarign15">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="articaleareapdf archivejournal">
                        <h5>Archive</h5>
                        @foreach($articles as $article)
                        <div class="contentarticle">
                            <div class="leftcontentarticle">
                                <a href="{{ url('journal-category/view-archive',$article->article_id) }}">{{ $article->article_title }}</a>
                                <div class="metaauthor">
                                    <p>{{ $article->author_name }}</p>
                                </div>
                            </div>
                            <div class="rightcontentarticle">
                                <a href="./public/assets/backend_asset/fileToUpload/{{ $article->filetoupload }}"><button type="submit" style="" class="">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </button> </a>
                            </div>
                        </div>
                        @endforeach
                        @foreach($journals as $journal)
                        <div class="contentarticle">
                            <div class="leftcontentarticle">
                                <a href="{{ url('journal-category/view-archive',$journal->journal_id) }}">{{ $journal->journal_title }}</a>
                                <div class="metaauthor">
                                    <p>{{ $journal->user_author_name }}</p>
                                </div>
                            </div>
                            <div class="rightcontentarticle">
                                <a href="./public/assets/backend_asset/fileToUpload/{{ $article->filetoupload }}"><button type="submit" style="" class="">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </button> </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jurnalsidebar">
                        <div class="single-sidebar latestnew">
                            <h3>Latest Journal News</h3>
                            <ul>
                            @foreach($latest_categories as $latest_category)
                            <div class="latestewsingle">
                                <div class="imgarleates">
                                    <a href="{{ url('journal-category',$latest_category->category_id) }}">
                                    <img src="./public/assets/backend_asset/category_img/{{ $latest_category->category_img }} " style="height: 100px; width:100px;"></a>
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