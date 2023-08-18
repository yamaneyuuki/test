<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Attendance;

class UserMainController extends Controller
{
    public function showUserMain()
    {
        $user = session('user'); // セッションからログインしたユーザー情報を取得

        return view('user_main', compact('user'));
    }

    public function punchIn(Request $request)
    {
        $user = session('user');

        // Attendance モデルを使って従業員の最新のレコードを取得
        $attendance = Attendance::where('employee_id', $user->id)->latest()->first();

        if ($attendance) {
            // 既存のレコードを更新
            $attendance->update([
                'punch_in' => now(), // 現在の時刻を更新
            ]);

        } else {
            // 新しいレコードを作成
            Attendance::create([
                'employee_id' => $user->id,
                'punch_in' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Punch-in completed.');
    }

    public function punchOut(Request $request)
    {
        $user = session('user');

        // Attendance モデルを使って従業員の最新のレコードを取得
        $attendance = Attendance::where('employee_id', $user->id)->latest()->first();

        if ($attendance) {
            // 既存のレコードを更新
            $attendance->update([
                'punch_out' => now(), // 現在の時刻を更新
            ]);
        } else {
            // 新しいレコードを作成
            Attendance::create([
                'employee_id' => $user->id,
                'punch_out' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Punch-out completed.');
    }
}