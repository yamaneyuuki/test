<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('login_id')->unique();
            $table->string('password')->default(''); // デフォルト値を空文字列に設定
            $table->string('name'); // nameカラムを追加する
            // その他の必要なカラムを追加する
            $table->timestamps();
        });

        // 事前にデータを挿入
        DB::table('employees')->insert([
            'login_id' => '3333',
            'password' => Hash::make('4444'), // パスワードをハッシュ化
            'name' => '山根友樹', // 名前を追加
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}