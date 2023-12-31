<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'modul_id',
        'modulType',
        'materi',
        'deskripsi',
    ];

    public function courseModuls(){
        return $this->belongsTo(CourseModul::class, 'modul_id');
    }
}
