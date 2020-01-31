<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Session;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notices=Notice::orderBy('notice_id','DESC');
        $notices= $notices->paginate(5);

        return view('admin.notice.all_notice',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
        $obj = new Notice;

        $obj->title=$request->title;
        $obj->description=$request->description;
        $obj->author_name=$request->author_name;
            // doc/pdf file
            $files=$request->file('filetoupload');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/notice/';
            $files->move($destination_path, $picture); 
            $obj->filetoupload=$picture;
                
        $obj->publication_status=$request->publication_status;

        $obj->save();
        Session::flash('success', 'Your notice has been added successfully');
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
        $notice = Notice::findOrFail($id);
        return view('admin.notice.single',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice= Notice::findOrFail($id);
        return view('admin.notice.edit',compact('notice'));    }

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
        $data=Notice::findOrFail($id);
        if($request->hasfile('filetoupload')){  //for multiple image upload  
            $files=$request->file('filetoupload');
            
                $filename=$files->getClientOriginalName();
                $picture=date('His').$filename;
                $destination_path=base_path().'/public/assets/backend_asset/notice/';
                $files->move($destination_path, $picture); 
                $filetoupload = $picture;
            
            $input['filetoupload'] = $filetoupload;
        }
        $data->update($input);
        Session::flash('success','Your notice has been updated successfully.');
        return redirect('notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Notice::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your info has been deleted successfully');
        return redirect('notice');
    }
}
