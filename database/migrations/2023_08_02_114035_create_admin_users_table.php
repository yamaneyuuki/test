<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();
            $table->string('login_id')->unique();
            $table->string('password');
            $table->timestamps();
        });

        // 事前にデータを挿入
        DB::table('admin_users')->insert([
            'login_id' => '1111',
            'password' => Hash::make('2222'), // パスワードをハッシュ化
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('admin_users');
    }
};