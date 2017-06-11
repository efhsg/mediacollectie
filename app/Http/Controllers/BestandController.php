<?php

namespace App\Http\Controllers;

use App\Bestand;
use Illuminate\Http\Response;

class BestandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Response
    {
        return response()->make(Bestand::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bestand $bestand
     * @return \Illuminate\Http\Response
     */
    public function show(int $bestandId) : Response
    {

        dd(Bestand::find($bestandId)->mapModel);

        return response()->make(Bestand::find($bestandId));

    }

}
