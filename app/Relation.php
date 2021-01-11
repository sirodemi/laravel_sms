<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public function syojo()
    {
        return $this->belongsTo('App\Syojo');
    }

    public function part()
    {
        return $this->belongsTo('App\Part');
    }

    public function cause()
    {
        return $this->belongsTo('App\Cause');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
