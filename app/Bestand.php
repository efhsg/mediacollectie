<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestand extends Model
{
    protected $table = 'bestanden';

    public function schijfModel()
    {
        return $this->belongsTo('App\Schijf', 'schijf', 'naam');
    }

    public function mapModel()
    {
        return $this->belongsTo('App\Map', 'bestanden_ibfk_2', 'id');
    }

    public function bestandstypeModel()
    {
        return $this->belongsTo('App\Bestandstype', 'bestandstype', 'naam');
    }
}
