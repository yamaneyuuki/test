<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee_loginController extends Controller
{
     /**
     * 管理者メインページ表示
     * 
     * @return \Illuminate\View\View
     */
    public function show(): \Illuminate\View\View
    {
        return view('Administrator_main');
    }
}