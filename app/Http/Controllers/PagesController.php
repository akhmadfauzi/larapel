<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'Go to market',
            'Go to work',
            'Go to home'
        ];
        return view('welcome', ['tasks'=>$tasks]);
    }
    
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
