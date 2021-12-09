<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Thing;

class IndexController extends Controller
{
    public function index()
    {
        $things = Thing::all();
        return view('index' , compact('things'));
    }

    public function things()
    {
        $things = Thing::all();

        return response()->json(200 , 'Ok');
    }
}
