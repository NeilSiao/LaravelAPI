<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class APICollectionController extends Controller
{
    public function DogApi(Request $request){
        $client = new Client();
        $res = $client->request('GET', 'https://dog.ceo/api/breeds/image/random');
       $statusCode = $res->getStatusCode();
        // "200"
        $header = $res->getHeader('content-type')[0];
        // 'application/json; charset=utf8'
        $body =  $res->getBody();
        //$result ='';
        while(!$body->eof()){
            echo $body->read(1024);
        }

        //return response($result, 200);
    }
}
