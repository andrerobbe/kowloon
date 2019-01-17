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

	public function submit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
        ]);

        $msg        = '';
        $msg_body   = '';

        if (Subscriber::where('email', '=', $request->input('email') )->exists()) {
            // email found
            $msg        = 'error';
            $msg_body   = "You're already subscribed to our newsletter!";
        }
        else{
            // create new Subscriber
            $sub        = new Subscriber;
            $sub->email = $request->input('email');
            $sub->save();
            $msg        = 'succes';
            $msg_body   = "You've succesfully subscribed to our newsletter. Thank you!";
        }

        return redirect('/')->with($msg, $msg_body);
    }
}
