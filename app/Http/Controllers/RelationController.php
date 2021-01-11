<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Syojo;
use App\Part;
use App\Cause;
use App\Comment;
use App\Relation;

class RelationController extends Controller
{
    public function index(Request $request)
    {
        // 関連性レコードをidから検索する
        $items = Relation::all();

        echo ($items);

        return view('relation.index', ['items' => $items]);
    }
}
