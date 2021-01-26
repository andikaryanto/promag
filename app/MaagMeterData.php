<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaagMeterData extends Model
{
    protected $table ='maag_meter_datas';
    protected $fillable = ['name','gender','age','diet','lifestyle','symptom','symptomtime','symptomeffect','result'];
}
