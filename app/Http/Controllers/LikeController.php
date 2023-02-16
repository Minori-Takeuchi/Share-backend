<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;

class LikeController extends Controller
{
    public function index()
    {
        $items = Like::all();
        return response()->json([
        'data' => $items
        ], 200);
    }
    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
        'data' => $item
        ], 201);
    }
    
    public function destroy(Like $like)
    {
        $item = Like::where('id', $post->id)->delete();
        if ($item) {
            return response()->json([
            'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
            'message' => 'Not found',
            ], 404);
        }
    }
}