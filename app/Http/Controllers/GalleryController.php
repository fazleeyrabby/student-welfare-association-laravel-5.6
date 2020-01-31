<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File;
use App\Gallery;
use Session;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $galleries=Gallery::orderBy('gallery_id','DESC');
            
            // ->where('package.publication_status',1);
        $pro_name=$request->input('pro_name');
        if(!empty($pro_name)){
            $galleries->Where('pro_name','LIKE','%'.$pro_name.'%');
           //$packages->orWhere('type','LIKE','%'.$package_name.'%');
        }
        
        $galleries= $galleries->paginate(5);

        return view('admin.gallery.all_gallery',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Gallery;

        $obj->pro_name=$request->pro_name;
        $obj->description=$request->description;
        $obj->img_year=$request->img_year;

        $files=$request->file('img');  //for multiple image upload  
        $gallery_img='';
        foreach($files as $file){
            $filename=$file->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/gallery_img/';
            $file->move($destination_path, $picture); 
            $gallery_img .= ",".$picture;
        }
        $gallery_img = substr($gallery_img,1);
        $obj->img=$gallery_img;

        $obj->publication_status=$request->publication_status;

        $obj->save();
        Session::flash('success', 'Your Gallery has been added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.single',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::findOrFail($id);
        return view('admin.gallery.edit',compact('gallery'));
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
        $data=Gallery::findOrFail($id);
        if($request->hasfile('img')){  //for multiple image upload  
            $files=$request->file('img');
            $gallery_img='';
            foreach($files as $file){
                $filename=$file->getClientOriginalName();
                $picture=date('His').$filename;
                $destination_path=base_path().'/public/assets/backend_asset/gallery_img/';
                $file->move($destination_path, $picture); 
                $gallery_img .= ",".$picture;
            }
            $input['img'] = substr($gallery_img,1);
        }
        
        $data->update($input);
        Session::flash('success', 'Your gallery has been updated successfully');
        return redirect('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Gallery::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Gallery has been deleted successfully');
        return redirect('gallery');
    }
}
