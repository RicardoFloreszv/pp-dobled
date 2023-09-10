<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthService {

    /**
     * Registra un nuevo usuario.
     *
     * @param   array $data
     * @return  Response
     */
    public function registrar(array $data): Response
    {
        $user = User::create($data);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([
            'user' => $user,
            'access_token' => $accessToken
        ]);
    }

    /**
     * Inicia sesión de usuario.
     *
     * @param   array $loginData
     * @return  Response
     */
    public function iniciarSesion(array $loginData): Response
    {
        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Credenciales Invalidas']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response([
            'user' => auth()->user(),
            'access_token' => $accessToken
        ]);
    }

}
