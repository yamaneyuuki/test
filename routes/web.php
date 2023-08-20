<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee_loginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserMainController;
use App\Http\Controllers\Administrator_loginController;
use App\Http\Controllers\Administrator_signupController;
use App\Http\Controllers\Employee_listController;
use App\Http\Controllers\Contact_listController;
use App\Http\Controllers\Contact_editController;
use App\Http\Controllers\BusinessContactController;
use App\Http\Controllers\SituationController;


// 認証ルートの定義
//Auth::routes();

// 従業員ログインページを表示するルート定義
Route::get('/employee/login', [Employee_loginController::class, 'showLoginForm'])->name('employee.login.form');
Route::post('/employee/login', [Employee_loginController::class, 'login'])->name('employee.login');

// 従業員パスワード再設定ページ
Route::get('/password/reset', [SignupController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/password/update', [SignupController::class, 'updatePassword'])->name('password.update');

// ユーザーメインページの表示
Route::get('/user/main', [UserMainController::class, 'showUserMain'])->name('user.main');
// punch_inアクションのルート
Route::post('/user/punch-in', [UserMainController::class, 'punchIn'])->name('user.punch-in');
// punch_outアクションのルート
Route::post('/user/punch-out', [UserMainController::class, 'punchOut'])->name('user.punch-out');

// 緊急連絡先ページ
Route::get('/Emergency', function () {
    return view('emergency');
});

// 従業員閲覧用、業務連絡ページ
Route::get('/Contact', [ContactController::class, 'showContactPage'])->name('contact.list');
Route::post('/toggle-box/{box}', [UserMainController::class, 'toggleBox'])->name('toggle.box');

// 管理者ログインページ
Route::get('/admin/login', [Administrator_loginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [Administrator_loginController::class, 'login'])->name('admin.login');
Route::get('/admin/main', [Administrator_loginController::class, 'showMainPage'])->name('administrator.main');

// 管理者パスワード再設定ページ
Route::get('/admin/reset-password', [Administrator_signupController::class, 'showResetPasswordForm'])->name('admin.reset.password.form');
Route::post('/admin/reset-password', [Administrator_signupController::class, 'resetPassword'])->name('admin.reset.password');

// 管理者メインページ
Route::get('/Administrator_main', function () {
    return view('administrator_main');
});

// 従業員一覧ページ
Route::get('/employee/list', [Employee_listController::class, 'showListPage'])->name('employee.list');
Route::get('/employee/edit/{employee}', [Employee_listController::class, 'showEditPage'])->name('employee.edit');
Route::put('/employee/update/{employee}', [Employee_listController::class, 'updateEmployee'])->name('employee.update');
Route::delete('/employee/delete/{employee}', [Employee_listController::class, 'deleteEmployee'])->name('employee.delete');
Route::get('/employee/new', [Employee_listController::class, 'create'])->name('employee.new');
Route::post('/employee/new', [Employee_listController::class, 'store'])->name('employee.store');

// 業務連絡一覧ページ
Route::get('/Contact_list', [Contact_listController::class, 'showListPage'])->name('contact.list.page');

// 業務連絡編集ページ
Route::get('/Contact_edit/{contact}', [Contact_editController::class, 'showEditPage'])->name('contact.edit');
Route::put('/Contact_edit/{contact}', [Contact_editController::class, 'update'])->name('contact.update');
Route::delete('/Contact_edit/{contact}', [Contact_editController::class, 'destroy'])->name('contact.destroy');

// 業務連絡追加ページ
Route::get('/Additional_contact', [BusinessContactController::class, 'showForm'])->name('additional.contact');
Route::post('/Additional_contact', [BusinessContactController::class, 'submitForm'])->name('additional.submit');

//従業員情報表示ページ
Route::get('/situation', [SituationController::class, 'index'])->name('situation.index');