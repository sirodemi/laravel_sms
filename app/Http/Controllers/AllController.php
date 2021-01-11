<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Syojo;
use App\Part;
use App\Cause;
use App\Comment;

class AllController extends Controller
{
    public function index(Request $request)
    {
        // 単純に全データを取り出す
        $items_syojo = Syojo::all();

        $items_part = Part::all();

        $items_cause = Cause::all();

        $items_comment = Comment::all();

        return view(
            'all.index',
            [
                'items_syojo' => $items_syojo,
                'items_part' => $items_part,
                'items_cause' => $items_cause,
                'items_comment' => $items_comment,
            ]
        );
    }
}
