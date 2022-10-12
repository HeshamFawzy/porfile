<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
