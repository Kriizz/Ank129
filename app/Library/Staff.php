<?php

namespace App\Library;

class Staff
{
	public $ranks = [1 => 'Fondateur', 2 => 'Développeur', 3 => 'Développeur Web', 4 => 'Community Manager', 5 => 'Administrateur', 6 => 'Modérateur', 7 => 'Animateur', 8 => 'A l\'essai'];

	public function getRank($id)
	{
		try
		{
			return $this->ranks[$id];
		}
		catch (Exception $e)
		{
			return 'Inconnu';
		}
	}
}