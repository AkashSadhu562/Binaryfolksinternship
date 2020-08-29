<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getRouteKey()
    {
        protected $fillable = ['title','excerpt','body'];
    }
}
