<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Contact::factory(10)->create();
        // $this->call(PhotoSeeder::class);
        \App\Models\Photo::factory(100)->create();
    }
}
