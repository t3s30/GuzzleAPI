<?php
/* 
▲ Abdiel Carrasco ▲
Created on 06-07-2019
API CONTROLLER
*/

namespace App\Http\Controllers;
//Import class
use App\Repositories\Posts;
use Illuminate\Http\Request;

//Principal Controller
class PostController extends Controller{
    //pass Post to Construct
    protected $posts;
    public function __construct(Posts $posts){
        $this->posts = $posts;
    }

   

    //Method controller call on routes
    public function index(){
       $posts =  $this->posts->all();
    
       return view('posts.index', compact('posts')); 
    }
    //Call id post
    public function show($id){
    
        $post = $this->posts->find($id);
       
        return view('posts.show', compact('post'));             
    }

    
       //Call id post
       public function comments($id){
    
        $Postcoment = $this->posts->fixcoment($id);

        return view('posts.comments', compact('Postcoment'));             
    }

  
}

