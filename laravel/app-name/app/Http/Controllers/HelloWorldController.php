<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function index(){
        dd("Chamou o index!");
    }

    function show($hello){
        dd($hello);
    }
}