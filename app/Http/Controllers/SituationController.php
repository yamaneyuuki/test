<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class SituationController extends Controller
{
    public function index()
    {
        $employees = Employee::with('attendances')->get();

        return view('situation.index', compact('employees'));
    }
}
