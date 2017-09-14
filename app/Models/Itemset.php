<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itemset extends Model
{
	protected $table = 'itemsets';

	protected $timestamps = false;

	protected $primaryKey = 'ID';

	public function items()
	{
		return $this->hasMany('App\Model\Item', 'panoplie', 'ID');
	}
}