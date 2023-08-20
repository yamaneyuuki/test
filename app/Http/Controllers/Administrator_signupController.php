<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class Administrator_signupController extends Controller
{
    public function showResetPasswordForm()
    {
        return view('administrator_signup');
    }

    public function resetPassword(Request $request)
    {
        // 入力されたログインIDを取得
        $login_id = $request->input('login_id');

        // ログインIDが合致するユーザーを取得
        $user = AdminUser::where('login_id', $login_id)->first();

        if ($user) {
            // 新しいパスワードを取得
            $new_password = $request->input('new_password');

            // パスワードをハッシュ化して上書き
            $user->password = Hash::make($new_password);
            $user->save();

            return redirect()->route('admin.login.form')->with('success', 'パスワードを更新しました。');
        } else {
            return redirect()->back()->with('error', 'ログインIDが見つかりません。');
        }
    }
}


//namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//class Administrator_signupController extends Controller
//{
    //
//}
