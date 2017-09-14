<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $connection = 'auth';

    protected $table = 'web_news';
    
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'new_id', 'id');
    }
}