<?php

namespace App\Http\Controllers;

use App\Schijf;
use Illuminate\Http\Request;

class SchijfController extends Controller
{
    public function index()
    {
        return response()->make(Schijf::all());
    }

    public function show(Schijf $schijf)
    {
        return response()->make($schijf);
    }

}
