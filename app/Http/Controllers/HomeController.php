<?php

namespace App\Http\Controllers;

use App\Schijf;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $schijven = [];

    function __construct()
    {
        $this->schijven = Schijf::getSchijven();
    }

    public function index()
    {
        return view('redesign.home', [
            'title' => 'Home',
            'schijven' => $this->schijven
        ]);

    }

    public function search(Request $request)
    {

        $this->validate($request, [
            'searchstring' => 'required'
        ]);

        return view('home', [
            'title' => 'mediacollectie',
            'schijven' => $this->schijven,
            'searchstring' => $request->searchstring
        ]);

    }


}
