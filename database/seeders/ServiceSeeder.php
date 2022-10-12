<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icon' => 'paintbrush',
            'title' => 'Web Design',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'icon' => 'briefcase',
            'title' => 'Branding',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'icon' => 'search',
            'title' => 'Analytics',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'icon' => 'bargraph',
            'title' => 'Web Developent',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'icon' => 'genius',
            'title' => 'Web Marketing',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'icon' => 'chat',
            'title' => 'Support',
            'desc' => 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.',
            'arrangement' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
