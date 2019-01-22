<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
	{
		
	}

	/*
	 *
	 * Need $msg and $msg_body on newsletter subscibe pages
	 *
	 */


	public function index(){
		$msg 		= '';
		$msg_body 	= '';
		return view('_index', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function contact(){
		return view('_contact');
	}

	public function dogs(){
		return view('dogs');
	}

	public function dogsDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('dogsDetails', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function cats(){
		return view('cats');
	}

	public function catsDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('catsDetails', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function fish(){
		return view('fish');
	}

	public function fishDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('fishDetails', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function birds(){
		return view('birds');
	}

	public function birdsDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('birdsDetails', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	public function smallAnimals(){
		return view('smallAnimals');
	}

	public function smallAnimalsDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('smallAnimals', ["msg" => $msg, "msg_body" => $msg_body] );
	}
	
	public function other(){
		return view('other');
	}

	public function otherDetails(){
		$msg 		= '';
		$msg_body 	= '';
		return view('otherDetails', ["msg" => $msg, "msg_body" => $msg_body] );
	}

	/*
	 * Infinite scroller pages
	 */
	public function questions($id){
		return view('infinite-questions/question'. $id);
	}
	public function articles($id){
		return view('infinite-articles/article'. $id);
	}
}