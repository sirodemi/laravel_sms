<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ko extends Model
{
    protected $table = 'ko';

    public function oya()
    {
        return $this->belongsTo('App\Oya');
    }
}
