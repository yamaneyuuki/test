<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
     /**
     * 緊急連絡先ページを表示する
     * 
     * @return \Illuminate\View\View
     */
    public function show(): \Illuminate\View\View
    {
        return view('Emergency');
        //$employees = Employee::all();
        //$user = Auth::user();
        //return view('emergency', compact('user'));
    }
}