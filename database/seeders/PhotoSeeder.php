<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 1000; $i++)
        DB::table('photos')->insert([
            'id' => $i,
            'categoryId' => rand(1,5),
            'photo' => `https://picsum.photos/id/$i/300/300`,
            'title' => Str::random(10),
        ]);
    }
}
