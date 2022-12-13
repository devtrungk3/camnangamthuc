<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commments extends Model
{
    use HasFactory;

    public function commentsRecipes(){
        return $this->hasOne(Coments::class,'id', 'id_recipes');
    }

    public function commentsUsers(){
        return $this->hasOne(User::class,'id', 'id_user');
    }
}
