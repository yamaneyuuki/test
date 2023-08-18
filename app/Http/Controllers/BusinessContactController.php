<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessContact;

class BusinessContactController extends Controller
{
    public function showForm()
    {
        return view('additional_contact');
    }

    public function submitForm(Request $request)
    {
        // フォームのデータをバリデーション
        $request->validate([
            'date' => 'required|date',
            'content' => 'required|string|max:1000',
        ]);

        // データベースに登録
        BusinessContact::create([
            'date' => $request->input('date'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('additional.contact')->with('success', '連絡内容が登録されました。');
    }
}
