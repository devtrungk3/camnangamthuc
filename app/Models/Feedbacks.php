<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    use HasFactory;



    public function feedbacksUsers(){
        return $this->hasOne(User::class,'id', 'id_user');
    }
}
