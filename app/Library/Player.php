<?php

namespace App\Library;

class Player
{
    public $breeds = [1 => 'Féca', 2 => 'Osamodas', 3 => 'Enutrof', 4 => 'Sram', 5 => 'Xelor', 6 => 'Ecaflip', 7 => 'Eniripsa', 8 => 'Iop', 9 => 'Cra', 10 => 'Sadida', 11 => 'Sacrieur', 12 => 'Pandawa'];

    public function getBreed($id)
    {
        try
        {
            return $this->breeds[$id];
        }
        catch (Exception $e)
        {
            return 'Inconnu';
        }
    }
}