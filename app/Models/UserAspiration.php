<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAspiration extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'name', 'email', 'phone_number', 'form_title', 'form_content'
    ];

    protected $hidden = [];
}
