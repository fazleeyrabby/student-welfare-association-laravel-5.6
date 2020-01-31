@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন') 
@section('content')
<!-- <div class="section" id="b-section-header" name="Header">
    <div class="widget Header" data-version="2" id="Header1">
        <div class="header image-placement-behind no-image">
            <div class="container">
                <h1><a href="">Webublogoverflow Tutorial</a></h1>
                <p>Webublogoverflow</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Webublogoverflow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <div class="ml-auto my-2 my-lg-0">
                <div class="section" id="b-section-navbar-search-form" name="Navbar: search form">
                    <div class="widget BlogSearch" data-version="2" id="BlogSearch1">
                        <form action="" class="form-inline">
                            <input aria-label="Search this blog" class="form-control mr-sm-2" name="q" placeholder="Search this blog" type="text">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> -->

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @foreach($blogs as $blog)
            <h1 class="my-4">{{ $blog->category_name }}
          </h1>

            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="../public/assets/backend_asset/blog_img/{{ $blog->blog_img }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->article_title }}</h5>
                    <p class="card-text" align="justify">{{ substr(strip_tags($blog->article_description),0,150) }}</p>
                    <a href="https://bootsnipp.com/fullscreen/6Xa15" class="btn btn-primary">Read More →</a><br>
                    
                </div>
                <div class="rightcontentarticle">
                            <a href="../public/assets/backend_asset/fileToUpload/{{ $blog->filetoupload }}"><!-- url('dynamic-pdf',$article->article_id)  --><button type="submit" download="{{ $blog->filetoupload }}">
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </button> </a>
                        </div>
                <div class="card-footer text-muted">
                    {{ $blog->updated_at }}
                    <a href="#">{{ $blog->author_name }}</a>
                </div>
            </div>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">← Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer →</a>
                </li>
            </ul>
            @endforeach
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-3">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Simba</a>
                                </li>
                                <li>
                                    <a href="#">Nyati</a>
                                </li>
                                <li>
                                    <a href="#">Faru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Kiboko</a>
                                </li>
                                <li>
                                    <a href="#">Fisi</a>
                                </li>
                                <li>
                                    <a href="#">Pundamlia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">maelezo</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>
            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">banner</h5>
                <div class="card-body">
                    <img class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg" alt="Card image cap">
                </div>
            </div>
            <!-- tweeter -->
            <div class="card my-4">
                <h5 class="card-header">Tweeter here</h5>
                <div class="card-body">

                    <a class="twitter-timeline" href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw">Tweets by Luckmoshy</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a href="https://twitter.com/Luckmoshy?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Luckmoshy</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!--footer-->

@endsection