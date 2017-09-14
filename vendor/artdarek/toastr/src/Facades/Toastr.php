<?php 

namespace Artdarek\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade {

    public static function getFacadeAccessor()
    {
        return 'Artdarek\Toastr\Toastr';
    }

} 