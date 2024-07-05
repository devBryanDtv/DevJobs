<?php
// para usar  el metodo authorize se definen los metodos
// en el controller ppara pasar la autorizacion
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller
{
    //
    use AuthorizesRequests;
    use ValidatesRequests;
}
