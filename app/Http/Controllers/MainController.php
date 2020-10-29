<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function welcome()
   {
      return view('welcome');
   }
   public function testing()
   {
       return view('testing');
   }

   public function index()
   {
       return view('index1');
   }
   public function index1()
   {
       return view('index2');
   }
   public function updates()
   {
       return view('updates');
   }
}
