<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

public function create()
{
    return view('item');
}
public function store(Request $request)
{
    $item = new Item;
    $item->name = $request->get('name');
    $item->price = $request->get('price');
    $item->save();

    return 'Store the data';
}
}
