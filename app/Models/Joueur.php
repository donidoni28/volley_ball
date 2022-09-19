<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Photo;
use App\Models\Equipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Joueur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'phone',
        'mail',
        'origine'
    ];

    use HasFactory;
    protected $table = "joueurs";
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
}
