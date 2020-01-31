<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberOfYear;
use Session;
class MemberOfYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mbr_years=MemberOfYear::orderBy('moy_id','DESC');
        $mbr_year=$request->input('mbr_year');
        if(!empty($mbr_year)){
            $mbr_years->Where('mbr_year','LIKE','%'.$mbr_year.'%');
        }
        $mbr_years=$mbr_years->paginate(5);
        return view('admin.memberofyear.all_memberofyear',compact('mbr_years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.memberofyear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $mbrofyrs=MemberOfYear::create($input);
        Session::flash('success','Your Year has been added successfully');
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
        $mbrofyr=MemberOfYear::findOrFail($id);
        return view('admin.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mbrofyr=MemberOfYear::findOrFail($id);
        return view('admin.memberofyear.edit',compact('mbrofyr'));
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
        $data=MemberOfYear::findOrFail($id);
        $data->update($input);
        Session::flash('success', 'Your Year has been updated successfully');
        return redirect('member-of-year');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=MemberOfYear::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Member of Year has been deleted successfully');
        return redirect('member-of-year');
    }
}
