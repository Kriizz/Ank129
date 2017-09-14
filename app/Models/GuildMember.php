<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuildMember extends Model
{
	protected $connection = 'world';

    protected $table = 'guild_members';

    protected $primaryKey = 'guid';
    
    public $timestamps = false;
}