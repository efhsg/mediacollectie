<?php

namespace App\Http\Controllers;

use App\Schijf;
use Illuminate\Http\JsonResponse;

class SchijfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Schijf::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int $schijf_id
     * @return JsonResponse
     */
    public function show($schijfId): JsonResponse
    {
        return response()->json(Schijf::find($schijfId));
    }

}
