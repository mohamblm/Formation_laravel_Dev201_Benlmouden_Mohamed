<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('home');
    }
    public function blog($id){
    $posts=[
        1=>'laravel',
        2=>'php',
    ];

    return view('blog',['data'=>$posts[$id]]);
}
}
