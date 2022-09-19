<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('joueurs')->insert([
            'genre_id'=>null,
            'role_id'=>null,
            'equipe_id'=>null,
            'photo_id'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
