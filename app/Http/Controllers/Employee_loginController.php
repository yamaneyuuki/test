<?php

// Employee_loginController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\Attendance;

class Employee_loginController extends Controller
{
    public function showLoginForm()
    {
        $employees = Employee::all(); // 例としてすべての従業員データを取得

        return view('employee_login', compact('employees'));
    }

    public function login(Request $request)
    {
        // ログインIDとパスワードが一致するユーザーを検索する
        $credentials = $request->only('login_id', 'password');

        $user = Employee::where('login_id', $credentials['login_id'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // ログイン成功時の処理
            Auth::login($user);
            session()->put('user', $user);
            return redirect()->route('user.main');// ログイン後のページのルート名に変更
        } else {
            // ログイン失敗時の処理
            return redirect()->back()->with('error', '※ログインIDまたはパスワードが間違っています。');
        }
    }

    public function showMainPage()
    {
        $employees = Employee::all(); // 例としてすべての従業員データを取得

        return view('user_main', compact('employees'));
    }
}