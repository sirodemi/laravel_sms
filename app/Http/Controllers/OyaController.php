<?php

namespace App\Http\Controllers;

use App\Oya;
use Illuminate\Http\Request;

class OyaController extends Controller
{
    public function index(Request $request)
    {
        $items = Oya::find(1);
        return view('oya.index', ['items' => $items]);
    }
}
