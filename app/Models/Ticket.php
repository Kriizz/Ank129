<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $connection = 'auth';

	protected $table = 'web_tickets';

	public $timestamps = false;

	public function answers()
	{
		return $this->hasMany('App\Models\TicketAnswer', 'ticket_id', 'id');
	}
}