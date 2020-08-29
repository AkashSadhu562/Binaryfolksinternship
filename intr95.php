<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getRouteKey()
    {
        return 'slug';//Article::where('slug', $article)->first()
    }
}
