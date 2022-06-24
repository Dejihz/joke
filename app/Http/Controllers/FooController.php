<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index( )
    {
        $api_response = file_get_contents('https://v2.jokeapi.dev/joke/Any?blacklistFlags=nsfw,religious,political,racist,sexist,explicit&type=single&amount=4');
        $response = json_decode($api_response,true);
//        dd($response);
        $choice =array_rand($response['jokes']);
        $joke = $response['jokes'][$choice]['joke'];

        return view('index', compact('joke'));
    }

}
