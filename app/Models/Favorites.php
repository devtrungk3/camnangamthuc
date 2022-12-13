<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;
    public function favotitesRecipes(){
        return $this->hasOne(Coments::class,'id', 'id_recipes');
    }

    public function favotitesUsers(){
        return $this->hasOne(User::class,'id', 'id_user');
    }
}
