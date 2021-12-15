<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogposts extends Controller
{
    
    
    public function show($slug = null){
    
    
        
         return view('post');
    }
}
