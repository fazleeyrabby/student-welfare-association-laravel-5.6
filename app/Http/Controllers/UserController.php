<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File;
use Illuminate\Http\Request;
// use App\Package;

use App\Contactus;
use App\Article;
use App\Category;
use App\Registeruser;
use App\Userjournal;
// use App\Ticketpurchage;
// use App\Ticket;
use Session;
use Mail;
class UserController extends Controller
{
public function create(){
    return view('registration');
}
public function store_user_info(Request $request){
    
    $data=array();
    $data['username']=$request->username;
    $data['email']=$request->email;
    $data['password']= md5($request->password);
    $data['repass']= md5($request->repass);
    $data['country']=$request->country;
    $data['city']=$request->city;
    $data['contact']=$request->contact;
    $data['address']=$request->address;
    
        $files=$request->file('img');
        $filename=$files->getClientOriginalName();
        $picture=date('His').$filename;
        $destination_path=base_path().'/public/assets/backend_asset/user_img/';
        $files->move($destination_path, $picture); 
        $data['img']=$request->img=$picture;
           
        // $mailsend=[
        //     'name'=>$data['username'],
        //     'contact'=>$data['country'],
        //     'message'=>$data['address'],
        // ];
        // Mail::send('mail.mail',$mailsend,function($message) use ($mailsend){
        //     $message->from('fazleyrabby007@gmail.com','Student Walefare Assosiation');
        //     $message->to('fazleyrabbicse@gmail.com');
        // });

        $user_id=DB::table('registeruser')
                    ->insertGetId($data);
                    Session::put('user_id',$user_id);
                    Session::put('username',$data['username']);
                    Session::put('img',$data['img']);
        Session::flash('success', 'You are registration successfully');
        return redirect('/user-dashboard');
        }
        public function  user_login(){
        return view('login');
        }
        public function user_login_check(Request $request){
        $user_email=$request->email;
        $password=md5($request->password);
            $user_infos=DB::table('registeruser')
                        ->where('email',$user_email)
                        ->where('password',$password)
                        ->first();
        if ($user_infos) {
                Session::put('username',$user_infos->username);
                Session::put('user_id',$user_infos->user_id);
                Session::put('img',$user_infos->img);
                return redirect('/user-dashboard');
                // echo "success";exit();
            } else {
                return Redirect::to('/registration');
                // echo "error";
            }
        }

        public function user_dashboard(){
            $user_id=Session::get('user_id');
            $user_info=Registeruser::where('user_id',$user_id)
                        ->first();
            $categories =Category::all();
            // Session::put('img',$img);
            return view('user.dashboard',compact('categories','user_info'));
        }

        public function userinfo_update(Request $request){
               
               if(!empty($request->password) && !empty($request->repass)){
                    $input['password'] = md5($request->password);
                    $input['repass'] = md5($request->repass);
                }
                $input['username'] = $request->username;
                $input['email'] = $request->email;
                $input['country'] = $request->country;
                $input['city'] = $request->city;
                $input['contact'] = $request->contact;
                $input['address'] = $request->address;
                if($request->hasfile('img')){  //for multiple image upload  
                    $files=$request->file('img');
                        $filename=$files->getClientOriginalName();
                        $picture=date('His').$filename;
                        $destination_path=base_path().'/public/assets/backend_asset/user_img/';
                        $files->move($destination_path, $picture); 
                        $user_img = $picture;
                   
                    $input['img'] = $user_img;
                }
                $user = Registeruser::findOrFail($request->user_id);
                $done = $user->update($input);
                // if($done){
                //     flash('Operation successful','success');
                // }else{
                //     flash('Oh Allah! Something went wrong','danger');
                // }
                // return redirect('/user-dashboard');

                // $user_id=$request->user_id;
                // $password=bcrypt($request->password);
                // $repass=bcrypt($request->repass);
                // $input=$request->all();
                // $data=Registeruser::findOrFail($user_id);
                // if($request->hasfile('image')){  //for multiple image upload  
                //     $files=$request->file('image');
                //     $user_img='';
                    
                //         $filename=$files->getClientOriginalName();
                //         $picture=date('His').$filename;
                //         $destination_path=base_path().'/public/assets/backend_asset/user_img/';
                //         $files->move($destination_path, $picture); 
                //         $user_img = $picture;
                   
                //     $input['image'] = $user_img;
                //     $input['password'] = $password;
                //     $input['repass'] = $repass;
                // }
                
                // $data->update($input);
                Session::flash('success', 'Your information has been updated successfully');
                return redirect('/user-dashboard');
            }
            
            public function get_myjournal($id){

               $journal_data = Userjournal::join('category','userjournal.category_id','=','category.category_id')
                    ->where('userjournal.user_id',$id)
                    ->select('userjournal.*', 'category.category_name')
                    ->orderBy('journal_id','DESC')
                    ->get();
                $articles = Article::where('publication_status',1)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();    
                return view('user.myjournal',compact('journal_data','articles'));
            }

            public function get_transaction(Request $request){
                $this->validate($request, [
                    'pin_num' => 'required|numeric|digits:5'
                ]);

                Session::flash('alert-info', 'On the process');
                 return Redirect::back();
            }

            public function singleJournal($id){
                $articles = Article::where('publication_status',1)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();

               $article = Article::find($id);
                return view('single_journal',compact('article','articles'));
            } 

            public function singlearchive($id){
                $latest_categories = Category::where('publication_status',1)
                ->orderBy('category_id','DESC')
                ->limit(3)
                ->get();
                $articles = Article::where('publication_status',1)
                ->orderBy('article_id','DESC')
                ->limit(3)
                ->get();
               $article = Article::find($id);
               $journal = Userjournal::find($id);
                return view('singlearchive',compact('article','articles','journal','latest_categories'));
            }

            public function user_logout(){
                Session::flush();
                return Redirect::to('/');
            }
        }