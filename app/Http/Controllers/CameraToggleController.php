<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CameraToggleController extends Controller
{
    public function store(Request $request, Camera $camera): JsonResponse
    {
        $camera->update([
            'is_active' => $request['is_active']
        ]);

        return response()->json($camera);
    }
}
