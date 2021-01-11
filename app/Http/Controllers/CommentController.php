<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        // 単純に全データを取り出す
        $items = Comment::all();
        return view('comment.index', ['items' => $items]);
    }
}
