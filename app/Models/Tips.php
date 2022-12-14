<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    use HasFactory;

    public function tipsCategories(){
        return $this->hasOne(Categories::class, 'id', 'id_categories');
    }

    public function tipsUsers(){
        return $this->hasOne(User::class, 'id', 'tacgia');
    }

}
