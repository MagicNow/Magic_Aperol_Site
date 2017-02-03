<?php

namespace App\Http\Controllers;
use Cookie;
use Illuminate\Http\Request;
use MetzWeb\Instagram\Instagram;
use App\Models\Posts;

class ApiController extends Controller {


    public function posts()
    {

        $tag = 'endlesssummer';
        $client_id = "257703068.ba4c844.d89f1ef7995448c88c50031f58df6bc0";
        $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?access_token='.$client_id;

        //$posts = $this->getPosts();
        do
        {
            $inst_stream = $this->callInstagram($url);
            $results = json_decode($inst_stream, true);
            $url = $results['pagination']['next_url'];
            $this->setPost($results);
        } while ($url !='');
    }

    public function setPost($results)
    {
        foreach ($results['data'] as $key => $value) {
            $post = Posts::where('post_id',$value['id'])->first();
            if(!$post && isset($value['user']['full_name']) && !empty($value['user']['full_name'])){
                $data = [
                    'name' => utf8_encode($value['user']['full_name']),
                    'username' => $value['user']['username'],
                    'post_id' => $value['id'],
                    'descricao' => utf8_encode($value['caption']['text']),
                    'link' => $value['link'],
                    'image' => $value['images']['standard_resolution']['url'],
                    'type' => $value['type'],
                    'video' => ($value['type'] == 'video') ?  $value['videos']['standard_resolution']['url'] : ''
                ];

                Posts::create($data);
            }
        }
        
    }

    public function callInstagram($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    

    

    // public function index(Request $request)
    // {
    //     $section = 'users';

    //     dd($request->session()->get('age'));
    //     return view('site.home',compact('section'));

    // }

    // public function ageGate(Request $request){
    //     if($request->session()->get('age') == 'sim'){
    //         return 1;
    //     }else{
    //         $request->session()->put('age', 'sim');
    //         return 0;
            
    //     }
    // }

    
}
