<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $sliders = slider::orderBy('slider_id','DESC');
       $slider_heading=$request->input('heading');
       if(!empty($slider_heading)){
            $sliders->Where('heading','LIKE','%'.$slider_heading.'%');
       }

       $sliders=$sliders->paginate(5);
        return view('admin.slider.all_slider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasfile('img')) 
        { 
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('public/assets/backend_asset/slider_images/', $filename);
        }

        $slider=slider::create([
            'heading'=>$request->heading,
            'sub_heading'=>$request->sub_heading,
            'img'=>$filename,
            'publication_status'=>$request->publication_status
        ]);
        Session::flash('success', 'Your Slider has been added successfully');
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
         $slider = Slider::findOrFail($id);
        return view('admin.slider.single',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
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
        if($request->hasfile('img')) 
            { 
              $file = $request->file('img');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move('public/assets/backend_asset/slider_images/', $filename);
              $input['img'] =$filename;
            }
        $data=Slider::findOrFail($id);
        $data->update($input);
        Session::flash('success','Your slider has been updated successfully.');
        return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Slider::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Slider has been deleted successfully');
        return redirect('slider');
    }
}
