<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    //
    public function index(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8005/api/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'protected',['auth' => ['john@clivern.com', '1234']]);
        $data = $response->getBody()->getContents();
      $data =  \GuzzleHttp\json_decode($data);
        return view('welcome',compact('data'));
    }
}
