<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Contactus;
use App\Article;
use App\Ticketpurchage;
use App\Ticket;
use Session;
use Mail;

class PageController extends Controller
{
    public function singleJournal($id){
    	$article = Article::find($id);
    	// return view('singleJournal',compact('article'));
    }
    public function contactUs(){
    	return view('contact_us');
    }
    
    public function storeContact(Request $request){

      $data=[
        // 'email'=>$request->email,
        'name'=>$request->name,
        'phone'=>$request->phone,
        'message'=>$request->message,
      ];


      Mail::send('mail.mail',$data,function($message) use ($data){
        $message->from('ticketntourism@gmail.com','Ticket N Tourism');
        $message->to('ticketntourism@gmail.com');
        // $message->name($data['name']);
        // $message->phone($data['phone']);
        // $message->message($data['message']);
      });

    	$input=$request->all();
      $contactus=Contactus::create($input);
      Session::flash('success','Your information has been submitted successfully.Within 2 hours we will contact you. ');
      return redirect()->back();
    }

   public function bookingPackage(){
      return view('bookingPackage');
   }

   public function storebookingPackage(Request $request){
      $input=$request->input();    
   }

   public function ticketParchage(){
      return view('ticketPurchage');
   }

   public function storeticketParchage(Request $request){
      $input=$request->all();
      $ticketParchage=Ticketpurchage::create($input);
      Session::flash('success','Your information has been submitted successfully.Within 2 hours we will contact you.');
      return redirect()->back();
   }

   public function storeTicket(Request $request){
      $input=$request->all();
      $ticket=Ticket::create($input);
      Session::flash('success','Your information has been submitted successfully.Within 2 hours we will contact you.');
      return redirect()->back();
   }

   public function allTours(){
      $packages=Package::all();
      return view('tours',compact('packages'));
   }
}
