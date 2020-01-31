<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currentnotice;
use Session;
class currentNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $crntnotics = Currentnotice::where('currentnotice.publication_status',1)->orderBy('curntnotc_id','desc');
        $crntnotics=$crntnotics->paginate(6);

        return view('admin.currentnotice.all_crntnotice',compact('crntnotics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.currentnotice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $crntnotics=Currentnotice::create([
            'name'=>$request->name,
            'publication_status'=>$request->publication_status
        ]);
        Session::flash('success', 'Your current Notice has been added successfully');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentnotics=Currentnotice::findOrFail($id);
        return view('admin.currentnotice.edit',compact('currentnotics'));
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
        $data=Currentnotice::findOrFail($id);
        $data->update($input);
        Session::flash('success','Your notice has been updated successfully.');
        return redirect('current-notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Currentnotice::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Currentnotice has been deleted successfully');
        return redirect('current-notice');
    }
}
