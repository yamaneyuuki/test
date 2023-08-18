<?php

// app/Models/BusinessContact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessContact extends Model
{
    use HasFactory;

    protected $table = 'business_contact';
    protected $fillable = ['date', 'content'];
}

