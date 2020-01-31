<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use SXgi164MCGG3u5RKXaBGVBabmxQTVRAAVE5le;
use Illuminate\Http\Request;
use App\Article;
use App\Userjournal;
use App\Category;
use App\Registeruser;
use Session;
use Mail;
use Validator;
use Input;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $journals=Userjournal::join('category','userjournal.category_id','=','category.category_id')
            ->select('userjournal.*', 'category.category_name')
            ->orderBy('journal_id','DESC');
            // ->where('package.publication_status',1);
        // $package_name=$request->input('name');
        // if(!empty($package_name)){
        //     $packages->Where('name','LIKE','%'.$package_name.'%');
        //    //$packages->orWhere('type','LIKE','%'.$package_name.'%');
        // }
        
        $journals= $journals->paginate(5);

        return view('admin.userjournal.all_journal',compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id=Session::get('user_id');
        $user_info=Registeruser::where('user_id',$user_id)
                    ->first();
        $categories =Category::all();
        return view('user.create',compact('categories','user_info'));
    }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $obj = new Userjournal;

        $obj->user_id=$request->user_id;
        $obj->journal_title=$request->journal_title;
        $obj->category_id=$request->category_id;
        $obj->journal_description=$request->journal_description;
        $obj->user_author_name=$request->user_author_name;
        $obj->tran_num=$request->tran_num;
           
        $rules = array(

            'filetoupload' => 'required|max:20000|mimes:docx,doc,zip'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $message = $validator->messages();
            return redirect()->back()->withInput()->withErrors($validator);
        }else if ($validator->passes()) {
            $files=$request->file('filetoupload');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/userjournal_file/';
            $files->move($destination_path, $picture); 
            $obj->filetoupload=$picture;

             // blog image
            $files=$request->file('blog_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/blog_img/';
            $files->move($destination_path, $picture); 
            $obj->blog_img=$picture;

            $obj->save();
            Session::flash('success', 'Your Blog has been added successfully');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $journal = Userjournal::findOrFail($id);
        return view('admin.userjournal.single',compact('journal'));

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
        $journal=Userjournal::findOrFail($id);
        return view('admin.userjournal.edit',compact('journal','categories'));
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
        $data=Userjournal::findOrFail($id);
        if($request->hasfile('journal_img')){  //for multiple image upload  
            $files=$request->file('journal_img');
            $journal_image='';
            foreach($files as $file){
                $filename=$file->getClientOriginalName();
                $picture=date('His').$filename;
                $destination_path=base_path().'/public/assets/backend_asset/journal_images/';
                $file->move($destination_path, $picture); 
                $journal_image .= ",".$picture;
            }
            $input['journal_img'] = substr($journal_image,1);
        }
        
        $data->update($input);
        Session::flash('success', 'Your Journal has been updated successfully');
        return redirect('journal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Userjournal::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your User Journal has been deleted successfully');
        return redirect('all_journal');
    }
}
