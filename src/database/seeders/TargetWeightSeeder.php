<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class TargetWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        $target = [
            'user_id' => $user->id,
            'target_weight' => '50',
        ];
        DB::table('weight_target')->insert($target);
    }
}
