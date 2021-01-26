<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SymptomQuestion extends Model
{
    public function Symptoms()
    {
        return $this->hasMany(Symptom::class,'symptom_questions_id');
    }
}
