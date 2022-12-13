<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_properties extends Model
{
   use HasFactory;

    public function propertiesCategories(){
        return $this->hasOne(Categories::class, 'id', 'id_categories');
    }

    public function propertiesRecipes(){
        return $this->hasMany(Recipes::class, 'id_propertiescategories', 'id');
    }
}
