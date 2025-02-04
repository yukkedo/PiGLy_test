<?php

namespace Database\Seeders;

use App\Models\WeightLog;
use Illuminate\Database\Seeder;

class WeightLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WeightLog::factory()->count(35)->create();
    }
}
