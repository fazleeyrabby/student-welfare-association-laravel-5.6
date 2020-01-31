<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\Contactus;
use App\Ticketpurchage;
use App\Booking;
use App\Package;
use App\Ticket;
use App\Userjournal;
use App\Registeruser;
use Session;



class adminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data=$request->input();
    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'1' ])){
    			//echo "success"; die;
                //Session::put('adminSession',$data['email']);
    			return redirect('/admin/dashboard');
    		}else{
    			//echo "faild"; die;
    			return redirect('/admin')->with('flash_message_error','Invalid email or Password');
    		}
    	}
    	return view('admin.admin_login');
    } 

    public function showUser(){
        $users=User::paginate(5);
        return view('layouts.adminLayouts.admin_sidebar',compact('users'));
    }

    public function getuser_journal(){
         Userjournal::where('status',NULL)->update(['status'=>0]);
        $journals=Userjournal::join('category','userjournal.category_id', '=' ,'category.category_id')
                ->orderBy('journal_id','DESC');
                
               
        // $name=$request->input('name');
        // if (!empty($na me)) {
        //      $contactuss->Where('name','LIKE','%'.$name.'%');
        // }
        $journals=$journals->paginate(5);
         // echo "<pre>";
         //        print_r($journals);
         //        exit();
        return view('admin.userjournal.all_journal',compact('journals'));
    } 

    public function getregisteruser_info(){
         Registeruser::where('status',NULL)->update(['status'=>0]);
        $user_infos=Registeruser::orderBy('user_id','DESC');
        // $name=$request->input('name');
        // if (!empty($na me)) {
        //      $contactuss->Where('name','LIKE','%'.$name.'%');
        // }
        $user_infos=$user_infos->paginate(5);
        return view('admin.userregister.all_user',compact('user_infos'));
    }

    public function singleregisteruser_info($id){
         $user_info = Registeruser::findOrFail($id);
        return view('admin.userregister.single',compact('user_info'));
    } 

    public function unactive_user($id){
        // Registeruser::where('user_id',$id)
        //     ->update(['status' => 0]);     
            DB::table('registeruser')
                ->where('user_id',$id)
                ->update(['status' => NULL]);       
        // return view('admin.userregister.edit',compact('user_info'));
        Session::flash('success', 'User unactive successfully');
        return redirect()->back();
    } 

    public function active_user($id){
        // Registeruser::where('user_id',$id)
        //     ->update(['status' => 0]);     
            DB::table('registeruser')
                ->where('user_id',$id)
                ->update(['status' => 1]);       
        // return view('admin.userregister.edit',compact('user_info'));
        Session::flash('success', 'User active successfully');
        return redirect()->back();
    }

    public function registeruserDelete($id){
        $data=Registeruser::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'User information has been deleted successfully');
        return redirect('admin/register-user');
    }

    public function deleteuserJournal_info($id){
        $data=Userjournal::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'User Journal information has been deleted successfully');
        return redirect('journal');
    }

    public function contact(Request $request){
        Contactus::where('status',0)->update(['status'=>1]);
        $contactuss=Contactus::orderBy('contactus_id','DESC');
        $name=$request->input('name');
        if (!empty($name)) {
             $contactuss->Where('name','LIKE','%'.$name.'%');
        }
        $contactuss=$contactuss->paginate(5);
        return view('admin.contact.contactus',compact('contactuss'));
    }

    public function singleContact($id){
        $contactus = Contactus::findOrFail($id);
        return view('admin.contact.single',compact('contactus'));
    }

    public function deleteRegisteruser_info($id){
        $data=Registeruser::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Register user information has been deleted successfully');
        return redirect('/admin/register-user');
    }

    public function search_contactinfo(){
       // $categories=Category::orderBy('category_id','DESC');
        $name=$request->input('name');
        if(!empty($name)){
            $contactuss->Where('name','LIKE','%'.$name.'%');
        }
        $contactuss=$contactuss->paginate(5);
        return $contactuss;
        //return view('admin.contact.contactus',compact('contactuss'));
    }

    public function bookingPackage(request $request){
        Booking::where('status',0)->update(['status'=>1]);
        $bookingpackages=Booking::orderBy('booking_id','DESC');
        $name=$request->input('name');
        if(!empty($name)){
            $bookingpackages->Where('name','LIKE','%'.$name.'%');
        }
        $bookingpackages=$bookingpackages->paginate(5);
        return view('admin.bookingpackage.bookingpackage',compact('bookingpackages'));
    }

    public function singalBookingpackage($id){
        $booking=Booking::findOrFail($id);
        return view('admin.bookingpackage.singal',compact('booking'));
    }

    public function Bookingpackage_seen_by_admin($id){
        $booking=Booking::findOrFail($id);
        return view('admin.bookingpackage.edit',compact('booking'));
    }

    public function showMessage(){
        $bookings=Booking::paginate();
        return view('layouts.adminLayouts.admin_header',compact('bookings'));
    }

    public function Bookingpackage_delete($id){
        $data=Booking::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Booking package information has been deleted successfully');
        return redirect('admin/booking-package');
    }

    public function gallery(request $request){
        $packages=Package::orderBy('package_id','DESC');
        $name=$request->input('name');
        if(!empty($packages)){
            $packages->Where('name','LIKE','%'.$name.'%');
        }
        $packages=$packages->paginate(5);
        return view('admin.gallery.gallery',compact('packages'));
    }

    public function galleryDelete(){
        
    }

    public function ticketpurchage(Request $request){
        Ticketpurchage::where('status',0)->update(['status'=>1]);
        $ticketpurchages=Ticketpurchage::orderBy('ticketparchage_id','DESC');
        $name=$request->input('name');
        if(!empty($name)){
            $ticketpurchages->Where('customer_name','LIKE','%'.$name.'%');
        }
        $ticketpurchages=$ticketpurchages->paginate(5);
        return view('admin.ticketpurchage.purchageticket',compact('ticketpurchages'));
    }

     public function singleTicketpurchage($id){
        $ticketpurchage = Ticketpurchage::findOrFail($id);
        return view('admin.ticketpurchage.single',compact('ticketpurchage'));
    }

    public function ticketpurchage_info_delete($id){
        $data=Ticketpurchage::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Ticket Purchage information has been deleted successfully');
        return redirect('admin/ticketpurchage-info');
    }

    public function purchageticket(Request $request){
        Ticket::where('status',0)->update(['status'=>1]);
        $tickets=Ticket::orderBy('ticket_id','DESC');
        $name=$request->input('name');
        if(!empty($name)){
            $tickets->Where('customer_name','LIKE','%'.$name.'%');
        }
        $tickets=$tickets->paginate(5);
        return view('admin.purchageticket.purchageticket',compact('tickets'));
    }

    public function singlePurchageticket($id){
        $ticket = Ticket::findOrFail($id);
        return view('admin.purchageticket.single',compact('ticket'));
    }

    public function Purchageticket_info_delete($id){
        $data=Ticket::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Purchage Ticket information has been deleted successfully');
        return redirect('admin/purchageticket-info');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
    	Session::flush();
        return redirect('/admin')->with('flash_message_success','Logout successfully');
    }
}
