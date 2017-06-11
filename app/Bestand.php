<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bestand extends Model
{
    protected $table = 'bestanden';

    public function schijfModel()
    {
       return $this->belongsTo('App\Schijf', 'schijf', 'naam');
    }

    public function mapModel()
    {
        return $this->belongsTo('App\Map', 'map');
    }

    public function bestandstypeModel()
    {
        return $this->belongsTo('App\Bestandstype', 'bestandstype', 'naam');
    }
}
