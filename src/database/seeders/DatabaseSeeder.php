<?php

namespace Database\Seeders;

use App\Models\WeightLog;
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
        $this->call(UsersTableSeeder::class);
        $this->call(WeightLogTableSeeder::class);
        $this->call(TargetWeightSeeder::class);
    }
}
