<?php

namespace App\Models;

use App\Models\Continent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipe extends Model
{
    use HasFactory;
    
    
    public function joueur(){
        return $this->hasMany(Joueur::class);
    }
    public function continent(){
        return $this->belongsTo(Continent::class);
    }
    
}
