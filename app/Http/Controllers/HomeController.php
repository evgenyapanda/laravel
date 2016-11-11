<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class HomeController extends Controller
{
    public function index(){
        $logo = 'hermes';
        $items = Item::all();
        return view('home')->with(['logo'=> $logo,
                                   'items'=>$items]);
    }
}
