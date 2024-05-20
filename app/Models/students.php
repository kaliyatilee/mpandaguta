<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
  
    protected $fillable = [
        'firstname','lastname','birth_certificate_number','class','grade','guardian_phone','guardian_name','relationship','home_address','gender','bln_active',
    ];
} 
