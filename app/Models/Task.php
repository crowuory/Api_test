<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'status', 'due_date'
    ];

    public static $rules = [
        'title' => 'required|unique:tasks|max:255',
        'status' => 'in:pending,completed',
        'due_date' => 'required|date|after:today',
    ];
}
