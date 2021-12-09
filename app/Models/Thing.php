<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    protected $table = "things";

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
    ];
}
