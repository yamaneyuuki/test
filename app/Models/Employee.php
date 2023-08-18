<?php

// app/Models/Employee.php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Employee extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'employees';

    protected $fillable = ['login_id', 'name'];

    // 他のプロパティやメソッドの定義
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}