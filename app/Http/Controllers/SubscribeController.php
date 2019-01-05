<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribeController extends Controller
{   
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
    	return view('index', ["sub"=>$mail]);
	}

	public function submit(Request $request){
    	$this->validate($request, [
    		'email' => 'required|string|email|max:255',
    	]);


        $msg = '';
        $msg_body = '';

        //if already set in db, error msg, else create new
        if(Subscriber::find($request)){ 
            $msg        = 'error';
            $msg_body   = 'U bent al geabboneerd op onze nieuwsbrief!';
        }
        else{
            $msg        = 'succes';
            $msg_body   = 'U heeft zich succesvol aangemeld voor onze nieuwsbrief!';

            $sub        = new Subscriber;
            $sub->email = $request->input('email');
            $sub->save();
        }
    	
        return redirect('/index')->with($msg, $msg_body);
    }
}
