<?php

namespace App\Http\Middleware;

use App\Models\Permiso;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $method = $request->method();

        $path = $request->path();

        $pathSeccionado = explode("/",$path);

        $cantidad = count($pathSeccionado);

        $coincidencias = 0;

        $usuario = $request->user()->rol()->with('permiso')->get();

        //Se revisa cada uno de los permisos
        foreach ($usuario[0]->permiso as $permisoUsuario) {

            $permisoSeccionado = explode("/",$permisoUsuario->uri);

            if(count($permisoSeccionado) == $cantidad) {
                foreach ($permisoSeccionado as $key=>$seccion){
                    if(str_contains($seccion, '{') or $seccion == $pathSeccionado[$key]){
                        $coincidencias++;
                    }
                }
                if ( $coincidencias = $cantidad and $method = $permisoUsuario->metodo) {
                    return $next($request);
                }
                $coincidencias = 0;
            }
        }
        abort(403);
    }
}
