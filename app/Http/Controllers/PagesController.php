<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

   
    
    public function categories()
    {
        return view('categories');
    }
    public function cart()
    {
        return view('cart');
    }
    
}
