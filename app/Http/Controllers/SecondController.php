<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class SecondController extends Controller
{
    //
    public function index(){
    	$posts=DB::table('posts')->get();
    	//$posts=Post::all();
    	return view('post.index',['posts'=>$posts]);
    }

    public function select(){

    	return view('first.select');

    }
    public function side(){

       return view('first.side');

    }
     public function nav(){

       return view('first.nav');
          
    }
    
}
