<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(Request $request)
    {
        $items = Part::all();

        // withでリレーションデータを取り出す
        // $items = Board::with('person')->get();

        return view('part.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('part.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Part::$rules);
        $part = new Part;

        //fillメソッドを使わない場合
        $part->part = $request->part;
        $part->save();

        return redirect('/part');
    }
}
