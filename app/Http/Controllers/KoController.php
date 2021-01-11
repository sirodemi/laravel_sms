<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ko;

class KoController extends Controller
{
    public function index(Request $request)
    {
        // $items = Ko::all();

        $items = Ko::find(1);
        return view('ko.index', ['items' => $items]);
    }
}
