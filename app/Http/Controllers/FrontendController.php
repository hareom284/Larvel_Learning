<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {  
        $items = Item::all();
        return view('frontend.mainpage',compact('items'));
    }
}
