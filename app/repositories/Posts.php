<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Posts {
    //Instace
    protected $client;
    protected $clien2;
    public function __construct() {
        $this->client =  new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            // You can set any number of default request options.
            'timeout'  => 10.0,
            ]);

            $this->client2 =  new Client([
                // Base URI is used with relative requests
                'base_uri' => 'https://jsonplaceholder.typicode.com/comments',
                // You can set any number of default request options.
                'timeout'  => 10.0,
                ]);
    }

    public function all(){
         //Route API Guzzgle
             $response = $this->client->request('GET', 'posts');
    
            //Check Response Content
            //dd($response->getBody()->getContents());
            //Return json on Browser
            //return json_decode($response->getBody()->getContents());
    
            //save request
            return json_decode($response->getBody()->getContents());
    }

    public function find($id){
         //Double commas
        $response = $this->client->request('GET', "posts/{$id}");
        
        //Check Response Content
        //dd($response->getBody()->getContents());
        //Return json on Browser
        //return json_decode($response->getBody()->getContents());
        
        //save request
        
        return json_decode($response->getBody()->getContents());
        
    }

    public function fixcoment($id){
        //Double commas
       $response = $this->client2->request('GET', "{$id}");
       
       //Check Response Content
       //dd($response->getBody()->getContents());
       //Return json on Browser
       //return json_decode($response->getBody()->getContents());
       
       //save request
       
       return json_decode($response->getBody()->getContents());
       
   }

}
