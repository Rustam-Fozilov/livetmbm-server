<?php

namespace App\Http\Controllers;

use App\Http\Resources\CameraResource;
use App\Models\Camera;
use App\Http\Requests\StoreCameraRequest;
use App\Http\Requests\UpdateCameraRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function toggle(Request $request): JsonResponse
    {
        Camera::update(
            $request->all()
        );

        return response()->json([
            'success' => true,
            'data' => Camera::all()
        ]);
    }

    public function index(): JsonResponse
    {
        return response()->json(
            CameraResource::collection(Camera::all())
        );
    }


    public function create()
    {
        //
    }


    public function store(StoreCameraRequest $request)
    {
        //
    }


    public function show(Camera $camera): JsonResponse
    {
        return response()->json(
            new CameraResource($camera)
        );
    }


    public function edit(Camera $camera)
    {
        //
    }


    public function update(UpdateCameraRequest $request, Camera $camera)
    {
        //
    }


    public function destroy(Camera $camera)
    {
        //
    }
}
