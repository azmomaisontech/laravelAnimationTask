<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'surname',
        'dob',
        'email',
        'gender',
        'number',
        'comments'
    ];

    protected $casts = [
        'firstname' => 'string',
        'surname' => 'string',
        'dob' => 'date',
        'email' => 'string',
        'gender' => 'string',
        'number' => 'string',
        'comments' => 'string'
    ];
}
