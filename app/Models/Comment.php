<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $connection = 'auth';

    protected $table = 'web_news_comments';
    
    public $timestamps = false;

    public function account()
    {
        return $this->hasOne('App\Models\User', 'guid', 'author');
    }
}