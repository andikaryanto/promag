<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function Category()
    {
        return $this->belongsTo(ArticleCategory::class,'article_categories_id');
    }
}
