<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function register(){
        return view('form');
    }

    public function welcome(){
        return view('well');
    }

    public function welcome_post(Request $req){
        return view('well',['firstname'=> $req['firstname'], 'lastname'=>$req['lastname'] ]);
    }
}
