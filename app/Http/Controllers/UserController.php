<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index(): JsonResponse
    {
        return response()->json(
            auth()->user()->load('roles')
        );
    }

    public function store(Request $request): JsonResponse
    {
        $user = auth()->user();

        if (!$user->hasRole('super_admin')) {
            return response()->json([
                'success' => false,
                'message' => 'You are not authorized to perform this action'
            ]);
        }

        $new_user = User::create(
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string'
            ])
        );
        $new_user->roles()->attach(2);

        return response()->json([
            'success' => true,
            'message' => 'Role assigned successfully'
        ]);
    }
}
