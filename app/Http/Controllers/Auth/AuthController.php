<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Auth\AuthService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }


    /**
     * Registra un nuevo usuario.
     *
     * @param   Request $request
     * @return  Response
     */
    public function register(Request $request): Response
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = Hash::make($request->password);

        return $this->authService->registrar($validatedData);

    }


    /**
     * Inicia sesión de usuario.
     *
     * @param   Request $request
     * @return  Response
     */
    public function login(Request $request): Response
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

       return $this->authService->iniciarSesion($validatedData);
    }


    /**
     * Cierra sesión de un usuario.
     *
     * @param   Request $request
     * @return  Response
     */
    public function logout(Request $request): Response
    {
        $request->user()->token()->revoke();

        return response([
            'message' => 'Successfully logged out'
        ]);
    }

}
