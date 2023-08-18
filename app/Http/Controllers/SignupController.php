<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class SignupController extends Controller
{
    public function showResetForm()
    {
        // パスワード再登録ページを表示する
        return view('signup');
    }

    public function updatePassword(Request $request)
    {
        // ログインIDとパスワードが一致するユーザーを検索する
        $credentials = $request->only('login_id', 'password');

        $user = Employee::where('login_id', $credentials['login_id'])->first();

        if ($user) {
            // パスワードを更新
            $user->password = Hash::make($credentials['password']);
            $user->save();

            return redirect()->route('employee.login.form')->with('success', 'パスワードを更新しました。');
        } else {
            return redirect()->back()->with('error', 'ログインIDが見つかりません。');
        }
    }
}
