<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $item = User::create($request->all());
        return response()->json([
        'data' => $item
        ], 201);
    }
    public function show(User $user)
    {
        $item = User::find($user);
        if($item) {
            return response()->json([
                'data' => $item
            ],200);
        } else {
            return response()->json([
                'massage' => 'Not found'
            ],404);
        }
    }
}
