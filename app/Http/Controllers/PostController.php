<?php
/* 
▲ Abdiel Carrasco ▲
Created on 06-07-2019
API CONTROLLER
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

//Principal Controller
class PostController extends Controller{
    //Method controller call on routes
    public function index(){
        //Route API Guzzgle
        $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        // You can set any number of default request options.
        'timeout'  => 10.0,
        ]);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'posts');

        //Check Response Content
        //dd($response->getBody()->getContents());
        //Return json on Browser
        //return json_decode($response->getBody()->getContents());

        //save request
        $posts = json_decode($response->getBody()->getContents());
        return view('posts.index', compact('posts')); 
    }
    //Call id post
    public function show($id){
         //Route API Guzzgle
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://jsonplaceholder.typicode.com',
        // You can set any number of default request options.
        'timeout'  => 10.0,
        
    ]);
        // Send a request to https://foo.com/api/test
        //Double commas
        $response = $client->request('GET', "posts/{$id}");
        
        //Check Response Content
        //dd($response->getBody()->getContents());
        //Return json on Browser
        //return json_decode($response->getBody()->getContents());
        
        //save request
        
        $post = json_decode($response->getBody()->getContents());
        
        return view('posts.show', compact('post'));             
    }
    

}

