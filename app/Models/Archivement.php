<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivement extends Model
{
    protected $fillable = [
        'title','description','bln_active','img_url','category'
    ];
}

