<?php

namespace App\Http\Controllers;
use Cookie;
use Illuminate\Http\Request;
use MetzWeb\Instagram\Instagram;
use App\Models\Posts;

class HomeController extends Controller {


    public function index(Request $request)
    {
        $section = 'users';
        $posts = Posts::where('active',1)->orderBy('id','desc')->limit(9)->get();

        if($request->session()->get('age') == 'sim'){
            return view('site.home',compact('section','posts'));
        }else{
            $request->session()->put('age', 'sim');
            return view('site.age',compact('section','posts'));
            
        }
        //return view('site.home',compact('section','posts'));

    }

    public function ageGate(Request $request){
        if($request->session()->get('age') == 'sim'){
            return 1;
        }else{
            $request->session()->put('age', 'sim');
            return 0;
            
        }
    }

    
}
