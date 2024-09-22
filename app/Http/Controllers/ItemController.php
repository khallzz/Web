<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemList(){
        $items = Item::all();
        return view('homepage')->with('item', $items);
    }
}
