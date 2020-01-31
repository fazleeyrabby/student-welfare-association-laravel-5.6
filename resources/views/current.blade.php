@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<section class="journalpart samemarign15">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pdfpagearea">
                    <div class="pdfheading">
                        <h3>Stamford University Current Journal Paper</h3>
                        <p>The general journal is part of the accounting record keeping system. When an event occurs that must be recorded, it is called a transaction, and may be recorded in a specialty journal or in the general journal.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8">
                    <div class="volumepart">
                        <h4>content of Journal</h4>
                    </div>
                    <div class="articaleareapdf">
                        <h5>JOURNALS</h5>
                        @foreach($articles as $article)
                        <div class="contentarticle">
                            <div class="leftcontentarticle">
                                <a href="{{ url('view-article',$article->article_id) }}">{{ substr($article->article_title,0,200) }}
                                </a>
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
                                <a href="{{ url('view-userjournal',$journal->journal_id) }}">{{ $journal->journal_title }}</a>
                                <div class="metaauthor">
                                    <p>{{ $journal->user_author_name }}</p>
                                </div>
                            </div>
                            <div class="rightcontentarticle">
                                <a href="./public/assets/backend_asset/userjournal_file/{{ $journal->filetoupload }}"><button type="submit" style="" class="">
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
    </div>
</section>
@endsection