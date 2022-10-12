<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'key' => 'avatar',
            'value' => 'avatar',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'full_name',
            'value' => 'Louie Jie Mahusay',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'job_title',
            'value' => 'Web Developer',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'phone',
            'value' => '+ 1235 2355 98',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'email',
            'value' => 'info@yoursite.com',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'website_url',
            'value' => 'www.yoursite.com',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'address',
            'value' => '198 West 21th Street, Suite 721 New York NY 10016',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'hello',
            'value' => 'There live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in bookmarksgrove there live the blind texts far from the countries.Far far away, behind the word mountains, Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci there live the blind texts from the countries Vokalia and Consonantia, there live the blind texts. Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'twitter',
            'value' => '',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'facebook',
            'value' => '',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'linkedIn',
            'value' => '',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'key' => 'website',
            'value' => '',
            'visibility' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
