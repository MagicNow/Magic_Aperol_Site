<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use URL;
use Auth;
use Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Input;
use Redirect;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $section = 'posts';
        $posts = Posts::orderBy('id','desc')->paginate(30);

        return view('admin.posts.list',compact('posts','section'));
    }

    public function status($id,$status)
    {
        $entity = Posts::findOrFail($id);
        
        $entity->active = $status;
        $entity->save();
        return Redirect::route('admin.posts')->with('sucess', 'Registro alterado com sucesso!');;
    }

    
}