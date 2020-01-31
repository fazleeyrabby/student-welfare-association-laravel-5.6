<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use Session;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC');
            // ->where('package.publication_status',1);
        $article_name=$request->input('name');
        if(!empty($article_name)){
            $articles->Where('article_title','LIKE','%'.$article_name.'%');
           //$packages->orWhere('type','LIKE','%'.$package_name.'%');
        }
        
        $articles= $articles->paginate(5);

        return view('admin.article.all_article',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            // required

         $request->validate([
            'filetoupload' => 'required|file|max:20000',
        ]);

        // $fileName = "fileName".time().'.'.request()->filetoupload->getClientOriginalExtension();

        // $request->filetoupload->storeAs('logos',$fileName);
        $obj = new Article;

        $obj->article_title=$request->article_title;
        $obj->category_id=$request->category_id;
        $obj->article_description=$request->article_description;
        $obj->author_name=$request->author_name;
            // doc/pdf file
            $files=$request->file('filetoupload');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/fileToUpload/';
            $files->move($destination_path, $picture); 
            $obj->filetoupload=$picture;
            // blog image
            $files=$request->file('blog_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/blog_img/';
            $files->move($destination_path, $picture); 
            $obj->blog_img=$picture;

                
        $obj->publication_status=$request->publication_status;

        $obj->save();
        Session::flash('success', 'Your Blog has been added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $article=Article::join('category','article.category_id','=','category.category_id')
            ->select('article.*', 'category.category_name')
            ->orderBy('article_id','DESC')
            ->findOrFail($id);
        return view('admin.article.single',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $article= Article::findOrFail($id);
        return view('admin.article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $data=Article::findOrFail($id);
        if($request->hasfile('filetoupload')){  //for multiple image upload  
            $files=$request->file('filetoupload');
            
                $filename=$files->getClientOriginalName();
                $picture=date('His').$filename;
                $destination_path=base_path().'/public/assets/backend_asset/fileToUpload/';
                $files->move($destination_path, $picture); 
                $filetoupload = $picture;
            
            $input['filetoupload'] = $filetoupload;
        }
        $data->update($input);
        Session::flash('success','Your article has been updated successfully.');
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Article::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your article has been deleted successfully');
        return redirect('article');
    }
}
