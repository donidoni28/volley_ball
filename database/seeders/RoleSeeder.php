<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role' => 'avant',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role' => 'central',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role' => 'arriere',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role' => 'banc',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
