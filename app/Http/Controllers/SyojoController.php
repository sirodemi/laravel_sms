<?php

namespace App\Http\Controllers;

use App\Syojo;
use Illuminate\Http\Request;

class SyojoController extends Controller
{
    public function index(Request $request)
    {
        // 単純に全データを取り出す
        $items = Syojo::all();
        return view('syojo.index', ['items' => $items]);
    }
}
