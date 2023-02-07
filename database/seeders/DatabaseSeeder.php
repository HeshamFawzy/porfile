<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        Experience::factory()->count(10)->create();
        Education::factory()->count(10)->create();
        Skill::factory()->count(10)->create();
        $this->call([
            AboutSeeder::class,
            ServiceSeeder::class,
            SettingSeeder::class
        ]);
    }
}
