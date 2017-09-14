<?php

namespace App\Library;

class News
{
	public $types = [1 => 'News', 2 => 'Devblog', 3 => 'Mises à Jour'];

	public function getType($id)
	{
		try
		{
			return $this->types[$id];
		}
		catch (Exception $e)
		{
			return 'Inconnu';
		}
	}
}