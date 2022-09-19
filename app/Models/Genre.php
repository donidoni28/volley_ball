<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    // protected $table = 'posts';
    // public function getAllPosts()
    public function joueur(){
        return $this->hasOne(Joueur::class);
    }
}
