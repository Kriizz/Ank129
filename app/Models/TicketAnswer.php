<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketAnswer extends Model
{
	protected $connection = 'auth';

	protected $table = 'web_tickets_answers';

	public $timestamps = false;
}