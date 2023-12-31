<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'modul_questions_id', 'modul_id', 'course_id', 'category_id'];
}
