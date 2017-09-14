<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'item_template';

	protected $timestamps = false;

	public function itemset()
	{
		return $this->belongsTo('App\Model\Itemset', 'ID', 'panoplie');
	}
}