<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin']);
        User::create([
            'name' => 'User Test',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
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
    }
}
