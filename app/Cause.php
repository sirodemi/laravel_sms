<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $gurded = array('id');

    public static $rules = array(
        'cause' => 'required',
    );
}
