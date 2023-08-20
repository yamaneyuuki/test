<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //use HasFactory;
    protected $fillable = ['employee_id', 'punch_in', 'punch_out'];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
