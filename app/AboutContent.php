<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    public function archieves()
    {
        return $this->hasMany(AboutContentArchieve::class,'about_contents_id');
    }
}
