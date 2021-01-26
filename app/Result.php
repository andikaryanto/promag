<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function Products()
    {
        return $this->belongsToMany(product::class,'results_products','results_id','products_id');
    }
}
