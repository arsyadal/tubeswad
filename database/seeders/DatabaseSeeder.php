<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CourseCategory;
use App\Models\Kuisioner;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin']);
        User::create([
            'name' => 'User Test',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'namaUMKM' => 'Sisfone Catering',
            'jenisUMKM' => 'Catering',
            'skalaUMKM' => 'Offline',
            'nomorUMKM' => '081298123321',
        ])->assignRole('user');
        User::create([
            'name' => 'Admin Test',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ])->assignRole('admin');
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session One'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session One'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session One'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session One'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Two'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Three'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Three'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Three'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Three'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);
        Kuisioner::create([
            'question' => 'Are you sure you want to',
            'questionType' => 'Session Four'
        ]);

        CourseCategory::create([
            "name" => "GoOnline",
            "deskripsi" => "Go Online",
            'file' => 'kelass2.jpg',
        ]);
        CourseCategory::create([
            "name" => "GoModern",
            "deskripsi" => "Go Online",
            'file' => 'online.jpg',
        ]);
        CourseCategory::create([
            "name" => "GoGlobal",
            "deskripsi" => "Go Online",
            'file' => 'kelass3.avif',
        ]);
    }
}
