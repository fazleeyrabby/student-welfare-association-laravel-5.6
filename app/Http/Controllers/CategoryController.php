<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File;
use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories=Category::orderBy('category_id','DESC');
        $category_name=$request->input('category_name');
        if(!empty($category_name)){
            $categories->Where('category_name','LIKE','%'.$category_name.'%');
        }
        $categories=$categories->paginate(5);
        return view('admin.category.all_category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category;

        $obj->category_name=$request->category_name;
        $obj->category_description=$request->category_description;

            $files=$request->file('category_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/category_img/';
            $files->move($destination_path, $picture); 
            $category_img = $picture;
       
        $obj->category_img=$category_img;
        $obj->publication_status=$request->publication_status;

        $obj->save();
        Session::flash('success', 'Your Ctegory has been added successfully');
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
        $category = Category::findOrFail($id);
        return view('admin.category.single',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $category=Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
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
        $data=Category::findOrFail($id);
        if($request->hasfile('category_img')){  //for multiple image upload  
            $files=$request->file('category_img');
            
                $filename=$files->getClientOriginalName();
                $picture=date('His').$filename;
                $destination_path=base_path().'/public/assets/backend_asset/category_img/';
                $files->move($destination_path, $picture); 
                $package_img = $picture;
            
            $input['category_img'] = $package_img;
        }
        $data->update($input);
        Session::flash('success','Your category has been updated successfully.');
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Category::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Category has been deleted successfully');
        return redirect('category');
    }
}
