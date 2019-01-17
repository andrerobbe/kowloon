<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		$msg = '';
        $msg_body = '';

		return view('index', ["msg" => $msg, "msg_body" => $msg_body] );
	}
}
