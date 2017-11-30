<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function category()
        {
        	return $this->belongsTo('App\Category','category_id','id');
        }

    public function User()
        {
        	return $this->belongsTo('App\User','user_id','id');
        }
}
