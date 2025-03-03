<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('home');
    }
    public function blog($id,$book=null){
    $posts=[
        1 => ['title' => 'Laravel'],
        2 => ['title' => 'PHP'],
        3 => ['title' => 'JavaScript'],
        4 => ['title' => 'Python'],
        5 => ['title' => 'Java'],
        6 => ['title' => 'C#'],
        7 => ['title' => 'C++'],
        
    ];

    return view('blog',['data'=>$posts[$id]]);
    

    
}
}
