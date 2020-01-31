<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberOfYear;
use App\Member;
use Session;
use Validator;
use Input;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members=Member::orderBy('member_id','DESC');
        $name=$request->input('name');
        if(!empty($name)){
            $members->Where('name','LIKE','%'.$name.'%');
        }
        $members=$members->paginate(5);
        return view('admin.commite.all_commite',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mbrofyrs=MemberOfYear::all();
        return view('admin.commite.create',compact('mbrofyrs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Member;

        $obj->member_id=$request->member_id;
        $obj->name=$request->name;
        $obj->designation=$request->designation;
        $obj->mbr_typ=$request->mbr_typ;
        $obj->an_mbr_typ=$request->an_mbr_typ;
        $obj->address=$request->address;
        $obj->email=$request->email;
        $obj->contact=$request->contact;
        $obj->profession=$request->profession;
        $obj->edu_bcgnd=$request->edu_bcgnd;
        $obj->last_edu_insttd=$request->last_edu_insttd;
        $obj->blood_group=$request->blood_group;
        $obj->moy_id=$request->moy_id;
        $obj->description=$request->description;
        $obj->publication_status=$request->publication_status;
        $rules = array(

            'profile_pic' => 'required|max:20000|mimes:jpg,png,jpeg'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $message = $validator->messages();
            return redirect()->back()->withInput()->withErrors($validator);
        }else if ($validator->passes()) {
            $files=$request->file('profile_pic');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/profile_pic/';
            $files->move($destination_path, $picture); 
       
            $obj->profile_pic=$picture;
            $obj->save();
            Session::flash('success', ' Member has been added successfully');
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
         $member=Member::orderBy('member_id','DESC')
            ->findOrFail($id);
        return view('admin.commite.single',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::findOrFail($id);
        $mbrofyrs=MemberOfYear::all();
        return view('admin.commite.edit',compact('member','mbrofyrs'));
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
        if($request->hasfile('profile_pic')) 
            { 
              $file = $request->file('profile_pic');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move('public/assets/backend_asset/profile_pic/', $filename);
              $input['profile_pic'] =$filename;
            }
        $data=Member::findOrFail($id);
        $data->update($input);
        Session::flash('success','Member information has been updated successfully.');
        return redirect('member');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Member::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Member information has been deleted successfully');
        return redirect('member');
    }
}