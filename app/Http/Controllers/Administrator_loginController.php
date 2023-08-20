<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;

class Administrator_loginController extends Controller
{
    public function showLoginForm()
    {
        // ログイン画面を表示する
        return view('administrator_login');
    }

    public function login(Request $request)
    {
        // ログインIDとパスワードが一致するユーザーを検索する
        $credentials = $request->only('login_id', 'password');

        $user = AdminUser::where('login_id', $credentials['login_id'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // ログイン成功時の処理
            Auth::login($user);
            return redirect()->route('administrator.main');
        } else {
            // ログイン失敗時の処理
            return redirect()->back()->with('error', '※ログインIDまたはパスワードが間違っています。');
        }
    }

    public function showMainPage()
    {
        return view('administrator_main');
    }
}