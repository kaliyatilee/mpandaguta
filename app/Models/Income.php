<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
	protected $fillable = [
        'student_name','class','amount','category','currency'
    ];
}
