<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cause;

class CauseController extends Controller
{
    public function index(Request $request)
    {
        // 単純に全データを取り出す
        $items = Cause::all();
        return view('cause.index', ['items' => $items]);
    }
}
