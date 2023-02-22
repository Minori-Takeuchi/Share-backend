<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentController extends Controller
{
    public function index()
    {
        $items = Comment::with(['user:id,name'])
            ->get();
        return response()->json([
        'data' => $items
        ], 200);
    }
    public function store(Request $request)
    {
        $item = Comment::create($request->all());
        return response()->json([
        'data' => $item
        ], 201);
    }
}
