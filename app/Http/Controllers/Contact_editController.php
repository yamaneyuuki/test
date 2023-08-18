<?php
// app/Http/Controllers/Contact_editController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessContact;

class Contact_editController extends Controller
{
    public function showEditPage(BusinessContact $contact)
    {
        return view('contact_edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        // 業務連絡データをIDで検索して取得
        $contact = BusinessContact::find($id);

        // フォームから送信されたデータで業務連絡データを更新
        $contact->date = $request->date;
        $contact->content = $request->content;
        $contact->save();

        return redirect('/Contact_list')->with('success', '業務連絡データが更新されました。');
    }

    public function destroy($id)
    {
        // 業務連絡データをIDで検索して取得
        $contact = BusinessContact::find($id);

        // 業務連絡データを削除
        $contact->delete();

        return redirect('/Contact_list')->with('success', '業務連絡データが削除されました。');
    }
}
