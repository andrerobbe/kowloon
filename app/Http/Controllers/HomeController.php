<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
	{
		
	}

	public function index(){
		$msg 		= '';
		$msg_body 	= '';
		return view('index', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function contact(){
		$msg 		= '';
		$msg_body 	= '';
		return view('contact', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function dogs(){
		$msg 		= '';
		$msg_body 	= '';
		return view('dogs', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function cats(){
		$msg 		= '';
		$msg_body 	= '';
		return view('cats', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function fish(){
		$msg 		= '';
		$msg_body 	= '';
		return view('fish', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function birds(){
		$msg 		= '';
		$msg_body 	= '';
		return view('birds', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function smallAnimals(){
		$msg 		= '';
		$msg_body 	= '';
		return view('smallAnimals', ["msg" => $msg, "msg_body" => $msg_body] );
	}
	
	public function other(){
		$msg 		= '';
		$msg_body 	= '';
		return view('other', ["msg" => $msg, "msg_body" => $msg_body] );
	}


	public function questions($id){
		return view('questions/question'. $id);
	}
}