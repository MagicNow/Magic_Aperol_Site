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
        return view('site.home',compact('section'));

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
