<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\package;
use App\About;
use App\Article;
use App\Userjournal;
use App\Slider;
use App\Category;
use App\Member;
use App\Gallery;
use App\Constitution;
use App\Currentnotice;
use App\Notice;
use App\MemberOfYear;

class FrontendController extends Controller
{
  public function Index(){
  	$current_notic = Currentnotice::where('currentnotice.publication_status',1)->orderBy('curntnotc_id','desc')->first();

    $overview = About::where('about.publication_status',1)
                ->where('about.text_type',2)
                ->orderBy('about_id','desc')
                ->first();

    $notices = Notice::where('notice.publication_status',1)
                ->orderBy('notice_id','desc')
                ->limit(6)
                ->get();

    $categories = Category::where('category.publication_status',1)->orderBy('category_id','desc');
    $categories=$categories->paginate(6);

    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $sliders = Slider::where('publication_status',1)->get();

    $president = Member::where('publication_status',1)
                ->where('mbr_typ',2)
                ->first();

    $secretary = Member::where('publication_status',1)
              ->where('mbr_typ',3)
              ->first();

    // international
    $article_last_id=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->where('article.publication_status',1)
            ->where('category.category_name','International')
            ->first();

    $articles=Article::join('category','article.category_id','=','category.category_id')
    ->select('article.*', 'category.category_name')
    ->orderBy('article_id','DESC')
    ->where('article.publication_status',1)
    ->where('category.category_name','International')
    ->skip(1)
    ->take(5)
    ->get();
    // politics
    $politics_last_id=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->where('article.publication_status',1)
            ->where('category.category_name','Politics')
            ->first();

    $politics=Article::join('category','article.category_id','=','category.category_id')
    ->select('article.*', 'category.category_name')
    ->orderBy('article_id','DESC')
    ->where('article.publication_status',1)
    ->where('category.category_name','Politics')
    ->skip(1)
    ->take(5)
    ->get();
    // economy
    $economic_last_id=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->where('article.publication_status',1)
            ->where('category.category_name','Economy')
            ->first();

    $economies=Article::join('category','article.category_id','=','category.category_id')
    ->select('article.*', 'category.category_name')
    ->orderBy('article_id','DESC')
    ->where('article.publication_status',1)
    ->where('category.category_name','Economy')
    ->skip(1)
    ->take(5)
    ->get();
    // all blog
    $blog_last_id=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->where('article.publication_status',1)
            ->first();

    $blog_random=Article::join('category','article.category_id','=','category.category_id')
    ->select('article.*', 'category.category_name')
    ->orderBy('article_id','DESC')
    ->where('article.publication_status',1)
    ->get()
    ->random(1)
    ->first();

    $blogs=Article::join('category','article.category_id','=','category.category_id')
    ->select('article.*', 'category.category_name')
    ->orderBy('article_id','DESC')
    ->where('article.publication_status',1)
    ->skip(1)
    ->take(5)
    ->get();
 
    $all_members = Member::Where('member.publication_status',1)
                      ->orderBy('member_id','DESC')
                      ->skip(1)
                      ->take(5)
                      ->get();

    $members_last_id = Member::Where('member.publication_status',1)
                      ->orderBy('member_id','DESC')
                      ->first();

    $members = Member::Where('member.publication_status',1)
                      ->orderBy('member_id','DESC');
    $members = $members->paginate(12);

    return view('welcome',compact('current_notic','overview','notices','categories','sliders','president','secretary','latest_categories','article_last_id','articles','politics_last_id','politics','economic_last_id','economies','blog_last_id','blog_random','blogs','all_members','members_last_id','members'));
  }

  public function notice_detail($id){
    $notice = Notice::find($id);
    return view('notice',compact('notice'));
  }

  public function search(Request $request){

    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $categories=Category::where('category.publication_status',1)->orderBy('category_id','DESC');
    $category_name=$request->input('name');
    if(!empty($category_name)){
      $categories->Where('category_name','LIKE','%'.$category_name.'%');
      // $packages->orWhere('location','LIKE','%'.$category_name.'%');
    }
    $categories=$categories->paginate(5);
    $journals = Userjournal::limit(5)->get();
    $articles = Article::where('publication_status',1)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();
    $sliders = Slider::get();
    return view('welcome',compact('categories','sliders','journals','articles','latest_categories'));
  }

  public function advisor(){
    $advisors = Member::Where('member.publication_status',1)
                      ->where('mbr_typ',1)
                      ->orderBy('member_id','DESC');
    $advisors = $advisors->paginate(3);
    return view('advisor',compact('advisors'));
  }

  public function member(){
    $members = Member::Where('member.publication_status',1)
                      ->where('an_mbr_typ',1)
                      ->orderBy('member_id','DESC');
    $members = $members->paginate(3);
    return view('member',compact('members'));
  }

  public function x_member(){
    $members = Member::Where('member.publication_status',1)
                      ->where('an_mbr_typ',2)
                      ->orderBy('member_id','DESC');
    $members = $members->paginate(3);

    $mbr_yrs = MemberOfYear::Where('memberofyear.publication_status',1)
                      ->orderBy('moy_id','DESC')->get();

    return view('x_member',compact('members','mbr_yrs'));

  }

  public function mbr_by_yr($id){
     $mbr_yrs = MemberOfYear::Where('memberofyear.publication_status',1)
                      ->orderBy('moy_id','DESC')->get();

     $member_yrs = MemberOfYear::Where('memberofyear.publication_status',1)
                      ->where('moy_id',$id)->first();
                      
    // $member_yrs = $member_yrs->paginate(3);
   // return  $members = Member::find($id);

 // return $article_last_id = Member::join('memberofyear','member.moy_id','=','memberofyear.moy_id')
 //            ->select('member.*', 'memberofyear.mbr_year')
 //            ->orderBy('member_id','DESC')
 //            ->where('member.publication_status',1)
 //            ->where('moy_id',$id)->get();

    $members = Member::Where('member.publication_status',1)
                      ->where('moy_id',$id)
                      ->orderBy('member_id','DESC');
            $members = $members->paginate(3);
    return view('mbr_yr',compact('mbr_yrs','member_yrs','members'));
  }

  public function member_by_id($id){
    $member = Member::find($id);
    return view('single_member',compact('member'));

  }

  public function blog_details(){
    return view('single_blog');
  }

  public function gallery_page(){
    $galleries = Gallery::where('gallery.publication_status',1)
                ->orderBy('gallery_id','desc');
    $galleries=$galleries->paginate(4);
    return view('gallery',compact('galleries'));
  } 

  public function cnstuon_page(){
    $constitutions = Constitution::where('constitution.publication_status',1)
                ->orderBy('constuon_id','desc');
    $constitutions=$constitutions->paginate(4);
    return view('constitution',compact('constitutions'));
  }

  public function blood_doner(){
    $members = Member::where('member.publication_status',1)
                ->orderBy('member_id','desc');
    $members=$members->paginate(10);
    return view('blooddoner',compact('members'));
  }

  public function bldgrp_src(Request $request){
    $members=Member::where('member.publication_status',1)->orderBy('member_id','DESC');
    $blood_group=$request->input('blood_group');
    if(!empty($blood_group)){
      $members->Where('blood_group','LIKE','%'.$blood_group.'%');
      // $packages->orWhere('location','LIKE','%'.$category_name.'%');
    }
    $members=$members->paginate(5);
   
    return view('blooddoner',compact('members'));
    // return redirect()->back();
    // return redirect()->back()->with(compact('members'));
  }

  public function journal_category($id){

    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles = Article::where('article.publication_status',1)->where('category_id',$id)->orderBy('article_id','desc')->get();
    $journals = Userjournal::where('userjournal.status',1)->where('category_id',$id)->orderBy('journal_id','desc')
          ->get();
     $sliders = Slider::get();
    return view('journalpdf',compact('articles','sliders','journals','latest_categories'));
  }

  public function blog_by_category(Request $request, $id){

    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $blogs = Article::where('article.publication_status',1)->where('category_id',$id)->orderBy('article_id','desc')->get();
    
    // $blogs = DB::table('Article')
    //         ->join('category', 'article.category_id', '=', 'category.category_id')
    //         ->Where('article.publication_status',1)
    //         ->select('article.*', 'category.category_name')
    //         ->orderBy('article_id','DESC');
    $article_name=$request->input('name');
        if(!empty($article_name)){
            $blogs->Where('article_title','LIKE','%'.$article_name.'%');
           //$packages->orWhere('type','LIKE','%'.$package_name.'%');
        }
        
        // $blogs= $blogs->paginate(5);
        // echo "<pre>";
        // print_r($blogs);
        // exit();
    $journals = Userjournal::where('userjournal.status',1)->where('category_id',$id)->orderBy('journal_id','desc')
          ->get();
     $sliders = Slider::get();
    return view('blog',compact('blogs','sliders','journals','latest_categories'));

   return view('blog',compact('journals','sliders'));
  }


  public function single_article($id){
    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles = Article::where('publication_status',1)
                  ->orderBy('article_id','DESC')
                  ->limit(3)
                  ->get();
      $journals = Userjournal::where('userjournal.status',1)->where('category_id',$id)->orderBy('journal_id','desc');
      $journals=$journals->paginate(8);
       $article = Article::find($id);
      return view('single_journal',compact('article','articles','journals','latest_categories'));
  } 

  public function single_journal($id){
    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles = Article::where('publication_status',1)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();
    $journal = Userjournal::find($id);
      return view('single_userjournal',compact('journal','articles','latest_categories'));
  } 

  public function journal_current(){
    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->where('article.publication_status',1);
        $articles= $articles->paginate(8);

    $journals=Userjournal::join('category','userjournal.category_id','=','category.category_id')
            ->select('userjournal.*', 'category.category_name')
            ->orderBy('journal_id','DESC')
            ->where('userjournal.status',1);
        $journals= $journals->paginate(8);

        return view('current',compact('articles','journals','latest_categories'));
  }
 
  public function journal_archive(){
    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','ASC')
            ->where('article.publication_status',1);
        $articles= $articles->paginate(10);
    $journals=Userjournal::join('category','userjournal.category_id','=','category.category_id')
            ->select('userjournal.*', 'category.category_name')
            ->orderBy('journal_id','ASC')
            ->where('userjournal.status',1);
        $journals= $journals->paginate(10);
    $cur_articles=Article::join('category','article.category_id','=','category.category_id')
          ->select('article.*', 'category.category_name')
          ->orderBy('article_id','DESC')
          ->where('article.publication_status',1)
          ->limit(3)
          ->get();
          // Article::where('publication_status',1)
          //       // ->where('category_id',$id)
          //       ->orderBy('article_id','DESC')
          //       ->limit(3)
          //       ->get();
        // $articles= $articles->paginate(3);

        return view('archive',compact('articles','cur_articles','latest_categories','journals'));
  }

  public function about_detail(){
    $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
    $articles = Article::where('publication_status',1)
                // ->where('category_id',$id)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();
    $about = About::where('about.publication_status',1)
                ->where('about.text_type',1)
                ->orderBy('about_id','desc')
                ->first();
        return view('about',compact('about','articles','latest_categories'));
  }
}
