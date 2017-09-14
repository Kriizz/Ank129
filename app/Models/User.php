<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $connection = 'world';

    protected $table = 'accounts';

    protected $primaryKey = 'guid';

    public $timestamps = false;

    public function players()
    {
        return $this->hasMany('App\Models\Player', 'account', 'guid');
    }
}