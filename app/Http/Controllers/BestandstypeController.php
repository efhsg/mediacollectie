<?php

namespace App\Http\Controllers;

use App\Bestandstype;
use Illuminate\Http\Response;

class BestandstypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response()->make(Bestandstype::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bestand $bestand
     * @return \Illuminate\Http\Response
     */
    public function show(Bestandstype $bestandstype): Response
    {
        return response()->make($bestandstype);
    }
}