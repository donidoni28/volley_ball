<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                'continent' => 'antarctique',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'continent' => 'amerique',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'continent' => 'afrique',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'continent' => 'asie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'continent' => 'europe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'continent' => 'oceanie',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
