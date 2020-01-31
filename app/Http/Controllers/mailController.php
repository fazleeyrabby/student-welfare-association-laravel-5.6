<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function index(){
    	return view('mail');
    }

    public function postEmail(Request $request){
    	$data=[
    		// 'email'=>$request->email,
    		'name'=>$request->name,
    		'phone'=>$request->phone,
    		'message'=>$request->message,
    	];


    	Mail::send('mail.mail',$data,function($message) use ($data){
    		$message->from('fazleyrabbicse@gmail.com','journal');
    		$message->to('fazleyrabbicse@gmail.com');
    		// $message->name($data['name']);
    		// $message->phone($data['phone']);
    		// $message->message($data['message']);
    	});
    	return redirect()->back();
    }
}
