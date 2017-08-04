<?php

namespace App\Http\Controllers;

use App\Map;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response()->make(Map::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bestand $bestand
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map): Response
    {
        return response()->make($map);

    }
}
