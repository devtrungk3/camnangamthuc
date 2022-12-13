<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
 

    public function newsCategories(){
        return $this->hasOne(Categories::class, 'id', 'id_categories');
    }

    public function newsUsers(){
        return $this->hasOne(User::class, 'id', 'tacgia');
    }
}
