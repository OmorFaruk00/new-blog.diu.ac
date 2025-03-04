<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   public function index()
   {
    return view('index');
   }
   public function getPostDetails($id)
   {
       return view('post_details',compact('id'));
      
   }
   public function about()
   {
     return view('about');
      
   }
   public function contact()
   {
     return view('contact');
      
   }
}
