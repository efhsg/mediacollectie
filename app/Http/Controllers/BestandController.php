<?php

namespace App\Http\Controllers;

use App\Bestand;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class BestandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {

        $input = Input::only('bestandsnaam', 'schijfnaam');

        try {
            $bestanden = Bestand::bestandsnaam($input['bestandsnaam'])->schijfnaam($input['schijfnaam'])->get();
            return response()->make($this->formatBestanden($bestanden));
        } catch (\Exception $e) {
            return response()->make(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bestand $bestand
     * @return \Illuminate\Http\Response
     */
    public function show(int $bestandId): Response
    {

//        dd(Bestand::find($bestandId)->mapModel->naam);

        return response()->make(Bestand::find($bestandId));

    }

    private function formatBestanden($bestanden): array
    {

        $formatted = [];
        foreach ($bestanden as $bestand) {
            $formatted[] = [
                'id' => $bestand->id,
                'schijf' => $bestand->schijf,
                'map' => $bestand->mapModel->naam,
                'naam' => $bestand->naam,
                'type' => $bestand->bestandstype,
            ];
        }
        return $formatted;
    }


}
