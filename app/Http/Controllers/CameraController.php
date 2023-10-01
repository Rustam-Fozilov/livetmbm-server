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


    public function store(StoreCameraRequest $request): JsonResponse
    {
        $camera = Camera::create(
            $request->all()
        );

        return response()->json([
            'success' => true,
            'message' => 'Camera added successfully',
            'data' => $camera
        ]);
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


    public function update(UpdateCameraRequest $request, Camera $camera): JsonResponse
    {
        $camera->update(
            $request->all()
        );

        return response()->json([
            'success' => true,
            'message' => 'Camera updated successfully',
            'data' => $camera
        ]);
    }


    public function destroy(Camera $camera): JsonResponse
    {
        $camera->delete();

        return response()->json('Camera deleted successfully');
    }
}
