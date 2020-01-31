<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File;
use App\Constitution;
use Session;

class constitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constitutions=Constitution::orderBy('constuon_id','DESC');
            
            // ->where('package.publication_status',1);
        // $constitution_heading=$request->input('constitution_heading');
        // if(!empty($constitution_heading)){
        //     $constitutions->Where('constitution_heading','LIKE','%'.$constitution_heading.'%');
           //$packages->orWhere('type','LIKE','%'.$package_name.'%');
        // }
        
        $constitutions= $constitutions->paginate(5);

        return view('admin.constitution.all_constitution',compact('constitutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.constitution.create');
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

         $obj = new Constitution;

        $obj->constitution_heading=$request->constitution_heading;
        $obj->constitutiont_description=$request->constitutiont_description;

            $files=$request->file('filetoupload');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/backend_asset/constitution/';
            $files->move($destination_path, $picture); 
            // $fileToUpload = $picture;
       
        $obj->filetoupload=$picture;
        $obj->publication_status=$request->publication_status;

        $obj->save();
        Session::flash('success', 'Your Constitution has been added successfully');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
