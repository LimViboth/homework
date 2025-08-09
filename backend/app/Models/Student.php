<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'khmer_name',
        'latin_name',
        'gender',
        'dob',
        'address',
        'tel',
    ];

    protected $casts = [
        'dob' => 'date',
    ];
}
