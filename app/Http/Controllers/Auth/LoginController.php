<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
    // 新規登録の場合はユーザーUIDを設定し、登録済みの場合は該当するUserモデルを取得する。
        $user = User::firstOrNew(['id' => $request->id]);

    // 新規登録の場合はユーザーを作成してデータベースに保存する。
        if (!$user->exists) $user = $this->createUser($user, $request);

        Auth::login($user);

    // Nuxtにレスポンスを返す
        return response()->json('user successfully logged in', 200);
    }

// ユーザーの作成とデータベースに保存
    public function createUser(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->save();

        return User::where('id', $user->id)->first();
    }
}
