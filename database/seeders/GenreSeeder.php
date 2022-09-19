<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'genre'=>'Femme',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'genre'=>'Homme',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'genre'=>'Autres',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
