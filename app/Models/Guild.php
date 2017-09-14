<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
	protected $connection = 'world';

    protected $table = 'guilds';
    
    public $timestamps = false;

    public function members()
    {
        return $this->hasMany('App\Model\GuildMember', 'guild', 'id');
    }
}