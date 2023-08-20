<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model implements Authenticatable
{
    // モデルの定義など...

    public function getAuthIdentifierName()
    {
        return 'id'; // ユーザーIDのカラム名
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // ユーザーのID値を返す
    }

    public function getAuthPassword()
    {
        return $this->password; // ユーザーのパスワードを返す
    }

    // 追加したメソッド
    public function getRememberToken()
    {
        return $this->remember_token; // ユーザーの"remember_token"カラムを返す
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // ユーザーの"remember_token"カラムをセットする
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // "remember_token"カラムの名前を返す
    }
}



//namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

//class AdminUser extends Model
//{
//    use HasFactory;
//}
