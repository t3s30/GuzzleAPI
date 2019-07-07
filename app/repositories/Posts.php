<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Posts {
    public function all(){
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
            return json_decode($response->getBody()->getContents());
    }

    public function find($id)
    {
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
        
        return json_decode($response->getBody()->getContents());
        
    }

}
