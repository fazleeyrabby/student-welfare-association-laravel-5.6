<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $abouts = About::orderBy('about_id','DESC')
                ->get();
        // $abouts=$abouts->paginate(5);
        return view('admin.about.all_about',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'about_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // if($request->hasfile('about_img')) 
        // { 
        //   $file = $request->file('about_img');
        //   $extension = $file->getClientOriginalExtension(); // getting image extension
        //   $filename =time().'.'.$extension;
        //   $file->move('public/assets/backend_asset/about_images/', $filename);
        // }

        $about=About::create([
            'text_type'=>$request->text_type,
            'description'=>$request->description,
            'publication_status'=>$request->publication_status
        ]);
        Session::flash('success', 'Your info has been added successfully');
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
         $about = About::findOrFail($id);
        return view('admin.about.single',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about= About::findOrFail($id);
        return view('admin.about.edit',compact('about'));
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
        $data=About::findOrFail($id);
        $data->update($input);
        Session::flash('success','Your info has been updated successfully.');
        return redirect('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=About::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your info has been deleted successfully');
        return redirect('about');
    }
}
