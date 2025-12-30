<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $token = auth('api')->attempt($credentials);
        if (!$token)
        {
            return response()->json(['message' => 'Unauthorized access!'], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], Response::HTTP_OK);
    }

    public function refresh()
    {
        $refreshedToken = auth('')->refresh();

        return response()->json([
            'refresh_token' => $refreshedToken,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function me()
    {
        $user = auth('api')->user();

        return response()->json($user);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
