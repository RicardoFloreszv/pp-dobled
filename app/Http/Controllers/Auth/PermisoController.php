<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermisoCollection;
use App\Models\Permiso;

class PermisoController extends Controller
{
    //
    public function index(){

        return new PermisoCollection(Permiso::all());
    }
}
