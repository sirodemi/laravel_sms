<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $gurded = array('id');

    public static $rules = array(
        'comment' => 'required',
    );
}
