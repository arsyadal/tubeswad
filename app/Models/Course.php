<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'courseName',
        'namaPemateri',
        'deskripsi',
        'file',
        'sertifikat',
    ];

    public function coursemoduls(){
        return $this->hasMany(CourseModul::class);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($modul) {
            $modul->coursemoduls()->each(function($coursemoduls){
                $coursemoduls->delete();
            });
        });
    }
}
