<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class Employee_listController extends Controller
{
    public function showListPage()
    {
        // employeesテーブルのデータを取得してビューに渡す
        $employees = Employee::all();

        return view('employee_list', compact('employees'));
    }

    public function showEditPage(Employee $employee)
    {
        // 編集ページに遷移する際に選択したデータをビューに渡す
        return view('employee_edit', compact('employee'));
    }

    public function updateEmployee(Request $request, Employee $employee)
    {
        // フォームから送信されたデータでemployeesテーブルのデータを更新する
        $employee->update($request->all());

        return redirect()->route('employee.list')->with('success', 'Employee updated successfully.');
    }

    public function deleteEmployee(Employee $employee)
    {
        // データを削除する
        $employee->delete();

        return redirect()->route('employee.list')->with('success', 'Employee deleted successfully.');
    }

    public function index()
    {
        // 既存の従業員データを取得して表示する処理を実装
        $employees = Employee::all();
        return view('employee_list', compact('employees'));
    }

    public function create()
    {
        return view('employee_create');
    }

    public function store(Request $request)
    {
        // フォームから送信されたデータを受け取り、employeesテーブルに新しいデータを追加する処理など
        $employee = new Employee();
        $employee->login_id = $request->input('login_id');
        $employee->name = $request->input('name');
        $employee->save();

        return redirect()->route('employee.list')->with('success', 'Employee added successfully.');
    }

}