<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\BusinessContact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function showContactPage()
    {
        // データベースからデータを取得し、dateカラムの値を日付の新しい順に並び替える
        $contacts = BusinessContact::orderBy('date', 'desc')->get();

        // 取得したデータのdateカラムをCarbonオブジェクトに変換
        foreach ($contacts as $contact) {
            $contact->date = Carbon::parse($contact->date);
        }

        return view('contact', compact('contacts'));
    }
}
