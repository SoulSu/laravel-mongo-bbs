<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Redis;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    

	/**
	 * [getIndex index page]
	 * @return [type] [description]
	 */
    public function getIndex(Request $request)
    {
    	// $redis = Redis::set("testredis", "ssssssssss");
    	// var_dump($redis);
    	// 
    	// $session = $request->session()->get("a", "kong");
    	// var_dump($session);
    	// 
    	// var_dump($request->session()->getName());
    	// var_dump($request->session()->getId());


    	
    }



}
