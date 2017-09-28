<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Mail;
class PagesController extends Controller{
	
	

 public function __construct()
    {
        $this->middleware('auth');
    }

	public function getIndex(){
	# process variable or params 
	# render to the correct view 
	# talk to the model
	# get data from the model 
	# process data from the model 
		$post=Post::orderBy('created_at', 'desc')->limit(4)->get();	
		return view('pages.welcome')->withPost($post);
	}
	
	public function getAbout(){
		$first="Rakhimjon";
		$last='Rustamov';
		$full=$first . " " . $last;
		$email='rakhimjon@email.com';
		$data=[];
		$data['fullname']=$full;
		$data['email']=$email;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
 		return view('pages.contact');
	}

	public function postContact(Request $request){
		$this->validate($request, array(
			'email'=> 'required|email',
			'subject'=> 'required|min:3', 
			'message'=>'required|min:10'
			  ));
		$data=array(
		'email'=>$request->email,
		'subject'=>$request->subject,
		'bodyMessage'=>$request->message
		 ); 

		Mail::send('emails.contact', $data, function($message)use ($data){
			$message->from($data['email']);
			$message->to('mr.rakhimjon.iut@gmail.com');
			$message->subject($data['subject']);
		});


	}

}

