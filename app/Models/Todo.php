<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done',
        'user_id'
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];
}
