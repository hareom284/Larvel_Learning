<?php

namespace App\Http\Controllers;
use App\Item;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {   $categories = Category::all();
        $items = Item::all();
        return view('frontend.mainpage',compact('items','categories'));
    }
    public function signin()
    {
        return view('frontend.signin');
    }
    public function signup()
    {
        return view('frontend.signup');
    }
    public function itemdetail($id)
    {
        $item = Item::find($id);
        return view('frontend.itemdetail',compact('item'));
    }
    public function itembysubcategory($id)
    {   
        $mysub = Subcategory::find($id);
        
        return view('frontend.itembysubcategory',compact('mysub'));
    }
}
