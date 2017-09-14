<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $connection = 'world';

    protected $table = 'players';

    protected $primaryKey = 'id';
    
    public $timestamps = false;
}