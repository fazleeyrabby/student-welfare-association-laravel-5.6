@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content') 
<section class="journalpart samemarign15">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="metajournalheader">
               <h3>{!! $journal->journal_title !!}</h3>
            </div>
            &nbsp;  &nbsp;
            <div class="viewjournaldescriptiob">
               <img class="img-responsive" src="../public/assets/backend_asset/blog_img/{{ $journal->blog_img }}" width="100%" height="300px"> &nbsp;  &nbsp;  &nbsp;
               <p style="text-align: justify;"> {!! strip_tags($journal->journal_description) !!} </p>
            </div>
            <div class="keywordsearchjournal">
               <h3>Keywords</h3>
               <ul>
                  <li>{!! $journal->user_author_name !!}</li>
               </ul>
            </div>
            <div class="author-box">
               <div class="author-info flex flex-wrap">
                  <div class="author-avatar">
                     <img src="images/instructor.jpg" alt="">
                     <ul class="author-social-profile p-0 m-0 mt-3 d-flex flex-wrap align-items-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                  </div>
                  <!-- .author-avatar -->
                  <div class="author-details">
                     <h3 class="author-name">Ms. Lara Croft <span>Admin</span></h3>
                     <div class="entry-content mt-3">
                        <p>Hi! I'm Colt. I'm a developer with a serious love for teaching. I've spent the last few years teaching people to program at 2 different immersive bootcamps where I've helped hundreds of people become web developers and change their lives. My graduates work at companies like Google, Salesforce, and Square.</p>
                     </div>
                     <!-- .entry-content -->
                  </div>
                  <!-- .author-details -->
               </div>
               <!-- .author-info -->
            </div>
            <!-- .author-box -->
            <div class="post-comments-wrap">
               <div class="post-comments">
                  <h3 class="comments-title"><span class="comments-number">02 Comments</span></h3>
                  <ol class="comment-list">
                     <li class="comment">
                        <article class="comment-body">
                           <figure class="comment-author-avatar">
                              <img src="images/c-1.png" alt="">
                           </figure>
                           <!-- .comment-author-avatar -->
                           <div class="comment-wrap">
                              <div class="comment-author">
                                 <span class="comment-meta d-block">
                                 <a href="#">27 Aug 2018</a>
                                 </span><!-- .comment-meta -->
                                 <span class="fn">
                                 <a href="#">Chris Hadfield</a>
                                 </span><!-- .fn -->
                              </div>
                              <!-- .comment-author -->
                              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                              <div class="reply">
                                 <a href="#">like</a>
                                 <a href="#">reply</a>
                              </div>
                              <!-- .reply -->
                           </div>
                           <!-- .comment-wrap -->
                           <div class="clearfix"></div>
                        </article>
                        <!-- .comment-body -->
                        <ol class="children">
                           <li class="comment">
                              <article class="comment-body">
                                 <figure class="comment-author-avatar">
                                    <img src="images/c-2.png" alt="">
                                 </figure>
                                 <!-- .comment-author-avatar -->
                                 <div class="comment-wrap">
                                    <div class="comment-author">
                                       <span class="comment-meta d-block">
                                       <a href="#">27 Aug 2018</a>
                                       </span><!-- .comment-meta -->
                                       <span class="fn">
                                       <a href="#">Albert Einstein</a>
                                       </span><!-- .fn -->
                                    </div>
                                    <!-- .comment-author -->
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi </p>
                                    <div class="reply">
                                       <a href="#">like</a>
                                       <a href="#">reply</a>
                                    </div>
                                    <!-- .reply -->
                                 </div>
                                 <!-- .comment-wrap -->
                                 <div class="clearfix"></div>
                              </article>
                              <!-- .comment-body -->
                           </li>
                           <!-- .comment -->
                        </ol>
                        <!-- .children -->
                     </li>
                     <!-- .comment -->
                     <li class="comment">
                        <article class="comment-body">
                           <figure class="comment-author-avatar">
                              <img src="images/c-3.png" alt="">
                           </figure>
                           <!-- .comment-author-avatar -->
                           <div class="comment-wrap">
                              <div class="comment-author">
                                 <span class="comment-meta d-block">
                                 <a href="#">27 Aug 2018</a>
                                 </span><!-- .comment-meta -->
                                 <span class="fn">
                                 <a href="#">Henry Ford</a>
                                 </span><!-- .comment-autho -->
                              </div>
                              <!-- .comment-author -->
                              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi </p>
                              <div class="reply">
                                 <a href="#">like</a>
                                 <a href="#">reply</a>
                              </div>
                              <!-- .reply -->
                           </div>
                           <!-- .comment-wrap -->
                           <div class="clearfix"></div>
                        </article>
                        <!-- .comment-body -->
                     </li>
                     <!-- .comment -->
                  </ol>
                  <!-- .comment-list -->
               </div>
               <!-- .post-comments -->
               <div class="comments-form">
                  <div class="comment-respond">
                     <h3 class="comment-reply-title">Leave a comment</h3>
                     <form class="comment-form">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="url" placeholder="Website">
                        <textarea rows="4" placeholder="Messages"></textarea>
                        <input type="submit" value="send message">
                     </form>
                     <!-- .comment-form -->
                  </div>
                  <!-- .comment-respond -->
               </div>
               <!-- .comments-form -->
            </div>
            <!-- .post-comments-wrap -->
         </div>
         <div class="col-md-4">
            <div class="jurnalsidebar bg-light">
               <div class="single-sidebar latestnew">
                  <h3 class="bg-success">Latest Blog</h3>
                  <ul>
                     @foreach($latest_categories as $latest_category)
                     <div class="latestewsingle">
                        <div class="imgarleates">
                           <a href="{{ url('journal-category',$latest_category->category_id) }}">
                           <img src="../public/assets/backend_asset/category_img/{{ $latest_category->category_img }} " style="height: 100px; width:100px;"></a>
                        </div>
                        <div class="newarticlesjournal">
                           <h3><a href="{{ url('journal-category',$latest_category->category_id) }}">{{ substr($latest_category->category_name,0,30) }}</a></h3>
                           <span>{{ $latest_category->created_at }}</span>
                        </div>
                     </div>
                     @endforeach
                  </ul>
               </div>
               <div class="fulltextpdf" style="padding: 10px;">
                  <hr>
                  <h3>Full Text</h3>
                  <a href="../public/assets/backend_asset/filetoupload/{{ $journal->filetoupload }}"><i class="fa fa-download" aria-hidden="true"></i></a>
               </div>
               <hr>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection