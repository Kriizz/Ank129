<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $connection = 'auth';

    protected $table = 'web_staffs';
    
    public $timestamps = false;

    public function account()
    {
        return $this->hasOne('App\Models\User', 'guid', 'account_id');
    }
}