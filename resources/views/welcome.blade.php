@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<!--slider-->
@if(Request::path()=='/')
@include('slider')
@endif
<!--//slider-->
<div class="container-fluid" style=" margin-top: 0px;">
   <div class="row">
      <div class="col-md-2">
         <div class="panel" style="background: rgb(206, 214, 221);">
            <p class="text-danger" style="size: a4; text-align: center; height: 60px; padding: 5px;">
               <strong style="font-size: 30px;">C</strong>
               ureent
               <em class="text-success">
                  <strong style="font-size: 30px;">
                  N</strong>
                  otice:
               </em>
            </p>
         </div>
      </div>
      <div class="col-md-10">
         <p style="background-color:#96959B;height: 60px;  text-align: center;padding: 0px 0px; color: #19C880;font-size: xx-large;">
            <style> 
               marquee {
               width: 100%;
               
               }
            </style>
            <marquee direction="scroll">{{ $current_notic->name }}</marquee>
         </p>
      </div>
   </div>
</div>
<section class="samemarign15">
   <div class="ovrvew" style="background-color: #F8F8FF;">
   <div class="container cont-1">
      <!-- <div class="col-md-12 cont-1"> -->
         <div class="row">
            <div class="col-md-3">
               <section class="events" style="margin-left: -14px;">
                  <div class="section-content" >
                     <section class="widget has-divider bg-success" style="text-align: center; background-color: ">
                        <div class="card text-white bg-secondary mb-2" style="height: 340px;">
                           <img class="card-img-top" src="./public/assets/backend_asset/profile_pic/{{ $president->profile_pic }}" style="height: 170px;" alt="Card image cap">
                           <div class="card-body">
                              <p style="color: yellow;">{{ $president->designation }}</p>
                              <h5 class="card-title" style="">{{ $president->name }}</h5>
                              <a href="{{ url('/members',$president->member_id) }}" class="btn btn-success">Details</a>
                           </div>
                        </div>
                     </section>
                     <section class="widget has-divider" style="text-align: center;">
                        <div class="card text-white bg-secondary mb-2 " style="height: 340px;">
                           <img class="card-img-top" src="./public/assets/backend_asset/profile_pic/{{ $secretary->profile_pic }}" style="height: 170px;" alt="Card image cap">
                           <div class="card-body">
                              <p style="color: yellow;">{{ $secretary->designation }}</p>
                              <h5 class="card-title" style="">{{ $secretary->name }}</h5>
                              <a href="{{ url('/members',$secretary->member_id) }}" class="btn btn-success">Details</a>
                           </div>
                        </div>
                     </section>
                  </div>
               </section>
               <!--//events-->
            </div>
            <div class="col-md-5">
               <div class="overview-title" style="margin: 15px 0 0 0px;">
                   <span class="text-success"><strong><i class="fa fa-envelope-open-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Overview</strong> </span>
               <hr>
               </div>
               <p style="text-align: justify; font-size: medium;" >
                  {!! $overview->description !!}
               </p>
            </div>
            <div class="col-md-4">
               <div class="event-widget" style="margin-right: -14px;">
                  <div class="widget-title ">Notices</div>
                  <!-- <marquee direction="scroll"> -->
                     <div class="content news events news-events hasScroll  ps-container ps-active-y">
                        @foreach($notices as $notice)
                        <div class="list-item news-list has-thumb">
                           <span class="events-date">{{ $notice->updated_at }}</span>
                           <div style="padding-left:15px;"><a href="{{ url('/notice-detail',$notice->notice_id) }}" target="_parent" class="notice_event text-info">{{ substr(strip_tags($notice->title),0,50)}}</a></div>
                           <a href="" target="_parent"></a>
                        </div>
                        @endforeach
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                           <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 448px; right: 0px;">
                           <div class="ps-scrollbar-y" style="top: 0px; height: 38px;"></div>
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -447px; width: 618px;">
                           <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 450px; height: 450px; right: 0px;">
                           <div class="ps-scrollbar-y" style="top: 412px; height: 38px;"></div>
                        </div>
                        
                     </div>
                  <!-- </marquee> -->
               </div>
            </div>
         </div>
      <!-- </div> -->
   </div>
   </div>
   <section class="service-area">
      <div class="container">
         <!-- <div class="row"> -->
            
            <div class="row">
            <div class="col-xl-6 mx-auto text-center">
               <div class="section-title mb-100">
                   <p class="text-danger" style="size: a4; text-align: center;">
                     <em class="text-success">
                        <strong style="font-size: 30px;">M</strong>
                        embers
                     </em>
                  </p>
                  <h6><p>List of <strong>Member</strong></p></h6>
                  <!-- <p>what i can do</p>
                  <h6>Blog item</h6> -->
               </div>
            </div>
         </div>
         <!-- </div> -->
         <div class="row">
            @foreach($members as $member)
            <div class="col-md-2">
            <div class="card single-advisor">
              <div class="card-header">{!! $member->name !!}</div>
              <div class="card-body">
               <img class="card-img-bottom" src="./public/assets/backend_asset/profile_pic/{{ $member->profile_pic }}" alt="Card image" style="width:100%; height: 100px;">
              </div> 
              <div class="">
              <!--  <p class="card-text">{!! substr($member->description,0,40) !!}</p> -->
               <a href="{{url('members',$member->member_id)}}" class="btn btn-success">See Profile</a>
              </div>
            </div>
            </div>
            @endforeach
         </div>
          {{ $members->render() }}
      </div>
   </section>
   <section class="satisfied-wrapper" >
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-xl-4 col-md-4 col-12">
               <div class="counter">
                  <?php
                     $total_userjournal = App\Registeruser::where('status',1)->count();
                     ?>
                  <div class="number animateNumber active" data-num="">
                     {{ $total_userjournal }}
                  </div>
                  <p>All register User</p>
                  <div class="counter-classic-decor"></div>
               </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-4 col-12">
               <div class="counter">
                  <?php
                     $total_cat = App\Category::where('publication_status',1)->count();
                     ?>
                  <div class="number animateNumber active" data-num="789">{{ $total_cat }}</div>
                  <p>Blog Category</p>
                  <div class="counter-classic-decor"></div>
               </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-md-4 col-12">
               <div class="counter">
                  <?php
                     $total_art = App\Article::where('publication_status',1)->count();
                     $total_userjor = App\Userjournal::where('status',1)->count();
                     ?>
                  <div class="number animateNumber active" data-num="65">{{ $total_art+ $total_userjor }}</div>
                  <p>All active Blog</p>
                  <div class="counter-classic-decor"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog -->
   <section class="blog-me pt-100 pb-100" id="blog">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 mx-auto text-center">
               <div class="section-title mb-100">
                  
                   <p class="text-danger" style="size: a4; text-align: center;">
                     <em class="text-danger">
                        <strong style="font-size: 30px;">Blog</strong>
                     </em>
                     <em class="text-success">
                        <strong style="font-size: 30px;">C</strong>
                        ategory
                     </em>
                  </p>
                  <h6><p>Here is list of <strong>Blog</strong> Category</p></h6>
                  <!-- <p>what i can do</p>
                  <h6>Blog item</h6> -->
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6">
               <!-- Single Blog -->
               <div class="single-blog">
                  <div class="blog-img"><a href="{{ url('journal-category',$category->category_id) }}">
                     <img src="./public/assets/backend_asset/category_img/{{ $category->category_img }}" style="height: 250px;" class="responsive" alt="" ></a>
                    <!--  <div class="post-category">
                        <a href="#">Creative</a>
                     </div> -->
                  </div>
                  <div class="blog-content">
                     <div class="blog-title">
                        <h4><a href="{{ url('journal-category',$category->category_id) }}" style="text-decoration: none;"><strong>{{ substr(strip_tags($category->category_name),0,30) }}</strong></a></h4>
                        <!-- <div class="meta">
                           <ul>
                              <li>{{ $category->updated_at }}</li>
                           </ul>
                        </div> -->
                     </div>
                     <p style="text-align:justify;">{{ substr(strip_tags($category->category_description),0,30) }}</p>
                     <!-- <a href="{{ url('blog-by-category',$category->category_id) }}" class="box_btn">read more</a> --> 
                     <a href="{{ url('journal-category',$category->category_id) }}" class="box_btn">List of Blog</a>

                  </div>
               </div>
            </div>
            @endforeach
         </div>
         {{ $categories->render() }}
      </div>
   </section>
   <!-- end blog -->
   <div class="special-box paddingTop20" id="special-box">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="catTitle">
                  <a href="{{ url('/view-article',$blog_random->article_id) }}">{{ $blog_random->article_title }}</a>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-8">
               <div class="single-block">
                  <div class="img-box">
                     <a href="" title="{{ $blog_last_id->article_title }}"><img src="./public/assets/backend_asset/blog_img/{{ $blog_last_id->blog_img }}" alt="" height="570px" width="100%" class=""></a>
                  </div>
                  <div class="overlay-details">
                     <h2>
                        <a href="{{ url('/view-article',$blog_last_id->article_id) }}" title="{{ $blog_last_id->article_title }}" target="_blank">{{ $blog_last_id->article_title }}</a>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="single-block">
                  <div class="details">
                     @foreach($blogs as $blog)
                     <div class="media">
                        
                        <div class="media-left">
                           <a href="">
                           <img class="img-responsive" height="100px" width="100px" src="./public/assets/backend_asset/blog_img/{{ $blog->blog_img }}" alt=""></a>
                        </div>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="{{ url('/view-article',$blog->article_id) }}" >{{ $blog->article_title }}</a></h4>
                        </div>
                       
                     </div>
                      @endforeach
                     <a href="#" class="btn btn-block btn-lg marginBottom20 btn-success" style="color:#fff"> আরও পড়ুন</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container text-center paddingTopBottom20"></div>
   </div>
   <div class="special-box paddingTop20" id="special-box" style="background: #BDC3C7">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="catTitle">
                  <a href="{{ url('/view-article',$blog_random->article_id) }}">{{ $blog_random->article_title }}</a>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-8">
               <div class="single-block">
                  <div class="img-box">
                     <a href="" title="{{ $blog_last_id->article_title }}"><img src="./public/assets/backend_asset/blog_img/{{ $blog_last_id->blog_img }}" alt="" height="570px" width="100%" class=""></a>
                  </div>
                  <div class="overlay-details">
                     <h2>
                        <a href="{{ url('/view-article',$blog_last_id->article_id) }}" title="{{ $blog_last_id->article_title }}" target="_blank">{{ $blog_last_id->article_title }}</a>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="single-block">
                  <div class="details">
                     @foreach($blogs as $blog)
                     <div class="media">
                        
                        <div class="media-left">
                           <a href="">
                           <img class="img-responsive" height="100px" width="100px" src="./public/assets/backend_asset/blog_img/{{ $blog->blog_img }}" alt=""></a>
                        </div>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="{{ url('/view-article',$blog->article_id) }}" >{{ $blog->article_title }}</a></h4>
                        </div>
                       
                     </div>
                      @endforeach
                     <a href="#" class="btn btn-block btn-lg marginBottom20 btn-success" style="color:#fff"> আরও পড়ুন</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container text-center paddingTopBottom20"></div>
   </div>
   <!-- start cat blog -->
   <div class="bg-light cat-by-blg">
      <div class="container">
      <!-- <div class="row"> -->
         <div class="col-sm-12 main-content category">
            <div class="row">
               <div class="col-sm-4">
                  <div class="single-cat-height">
                        <div class="mx-auto text-center">
                           <div class="section-title mb-100">
                              <h6>
                                 <p>
                                    <em class="text-dark">
                                       <strong style="font-size: 30px;color: #19C880;">আ</strong>ন্তর্জাতিক
                                    </em>
                                 </p>
                              </h6>
                           </div>
                        </div>
                     <!-- </div> -->
                     <div class="single-block">
                        <div class="img-box"><a href="{{ url('/view-article',$article_last_id->article_id) }}" target="_blank">
                           <img src="./public/assets/backend_asset/blog_img/{{ $article_last_id->blog_img }}" alt="" class="lazyload img-responsive" style="max-width: 100%;height: 177px;vertical-align: baseline;width: 100%;"></a>
                        </div>
                        <h4><a style="font-weight: bold;font-size: large;" href="{{ url('/view-article',$article_last_id->article_id) }}">{{ $article_last_id->article_title }}</a></h4>
                        <div class="details">
                           @foreach($articles as $article)
                           <div class="media">
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="{{ url('/view-article',$article->article_id) }}">{{ $article->article_title }}</a></h4>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="allnews"><a href="#"> সবখবর</a></div>
               </div>
               <div class="col-sm-4">
                  <div class="single-cat-height">
                     <div class="mx-auto text-center">
                           <div class="section-title mb-100">
                              <h6>
                                 <p>
                                    <em class="text-dark">
                                       <strong style="font-size: 30px;color: #19C880;">রা</strong>জনীতি
                                    </em>
                                 </p>
                              </h6>
                           </div>
                        </div>
                     <div class="single-block">
                        <div class="img-box"><a href="{{ url('/view-article',$politics_last_id->article_id) }}" target="_blank">
                           <img src="./public/assets/backend_asset/blog_img/{{ $politics_last_id->blog_img }}" alt="" class="lazyload img-responsive" style="max-width: 100%;height: 177px;vertical-align: baseline;width: 100%;"></a>
                        </div>
                        <h4><a href="{{ url('/view-article',$politics_last_id->article_id) }}">{{ $politics_last_id->article_title }}</a></h4>
                        <div class="details">
                           @foreach($politics as $politic)
                           <div class="media">
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="{{ url('/view-article',$politic->article_id) }}">{{ $politic->article_title }}</a></h4>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="allnews"><a href="#"> সবখবর</a></div>
               </div>
               <div class="col-sm-4">
                  <div class="single-cat-height">
                     <div class="mx-auto text-center">
                           <div class="section-title mb-100">
                              <h6>
                                 <p>
                                    <em class="text-dark">
                                       <strong style="font-size: 30px;color: #19C880;">অ</strong>র্থনীতি
                                    </em>
                                 </p>
                              </h6>
                           </div>
                        </div>
                     <div class="single-block">
                        <div class="img-box"><a href="{{ url('/view-article',$economic_last_id->article_id) }}" target="_blank">
                           <img src="./public/assets/backend_asset/blog_img/{{ $economic_last_id->blog_img }}" alt="" class="lazyload img-responsive" style="max-width: 100%;height: 177px;vertical-align: baseline;width: 100%;"></a>
                        </div>
                        <h4><a href="{{ url('/view-article',$economic_last_id->article_id) }}">{{ $economic_last_id->article_title }}</a></h4>
                        <div class="details">
                            @foreach($economies as $economic)
                           <div class="media">
                              <div class="media-body">
                                 <h4 class="media-heading">
                                    <a href="{{ url('/view-article',$economic->article_id) }}" target="_blank">
                                       {{ $economic->article_title }}
                                    </a></h4>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="allnews"><a href="#"> সবখবর</a></div>
               </div>
            </div>
         </div>
      <!-- </div> -->
   </div>
   </div>
   <!-- end cat blog -->
   
  <div class="special-box paddingTop20" id="special-box" style="background: #BDC3C7">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="catTitle">
                  <a href="{{ url('/members',$blog_random->article_id) }}">{{ $blog_random->article_title }}</a>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-8">
               <div class="single-block">
                  <div class="img-box">
                     <a href="" title="{{ $blog_last_id->article_title }}"><img src="./public/assets/backend_asset/profile_pic/{{ $members_last_id->profile_pic }}" alt="" height="570px" width="100%" class=""></a>
                  </div>
                  <div class="overlay-details">
                     <h2>
                        <a href="{{ url('/members',$members_last_id->member_id) }}" title="{{ $members_last_id->name }}">{{ $members_last_id->name }}</a>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="single-block">
                  <div class="details">
                     @foreach($all_members as $all_member)
                     <div class="media">
                        
                        <div class="media-left">
                           <a href="">
                           <img class="img-responsive" height="100px" width="100px" src="./public/assets/backend_asset/profile_pic/{{ $all_member->profile_pic }}" alt=""></a>
                        </div>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="{{ url('/members',$all_member->member_id) }}" >{{ $all_member->name }}</a></h4>
                        </div>
                       
                     </div>
                      @endforeach
                     <a href="#" class="btn btn-block btn-lg marginBottom20 btn-success" style="color:#fff"> আরও পড়ুন</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container text-center paddingTopBottom20"></div>
   </div>
</section>
</section>
@endsection