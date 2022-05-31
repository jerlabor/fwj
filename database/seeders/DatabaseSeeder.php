<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Habit::factory(10)->create();
        \App\Models\Value::factory(7)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Workout::factory(5)->create();

    }
}
