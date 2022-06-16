<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    public function opcionesPregunta(){
        return $this->hasMany(OptionQuestion::class,'id_question','id');
    }

}
