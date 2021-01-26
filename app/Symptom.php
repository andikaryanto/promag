<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    public function Question()
    {
        return $this->belongsTo(SymptomQuestion::class,'symptom_questions_id');
    }
}
