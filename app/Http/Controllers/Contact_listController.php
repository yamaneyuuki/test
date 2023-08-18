<?php
// app/Http/Controllers/Contact_listController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessContact;

class Contact_listController extends Controller
{
    public function showListPage()
    {
        // dateカラムで降順（新しい順）にデータを取得
        $contacts = BusinessContact::orderBy('date', 'desc')->get();

        return view('contact_list', compact('contacts'));
    }
}