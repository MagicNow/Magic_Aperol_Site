<?php

namespace App\Http\Controllers;
use Cookie;
use Illuminate\Http\Request;
use MetzWeb\Instagram\Instagram;
use App\Models\Posts;

class HomeController extends Controller {


    public function index(Request $request)
    {
        return view('site.age');
    }

    public function home(Request $request)
    {
        $section = 'users';
        $posts = Posts::where('active',1)->inRandomOrder()->limit(9)->get();

        return view('site.home', compact('section', 'posts'));
    }

    public function ageGate(Request $request){
        $request->session()->put('age', 'sim');
    }

    public function getFotos($num = 81){
        $posts = Posts::where('active', 1)->inRandomOrder()->limit($num)->get();

        return json_encode($posts);
    }
}
