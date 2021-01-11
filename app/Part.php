<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    // idは自動挿入
    protected $gurded = array('id');

    public static $rules = array(
        'part' => 'required',
    );

    /*
    public function getData()
    {
        // 従のデータを表示
        // return $this->id . ': ' . $this->title;

        //belongs To を使った　従から主へ逆の紐付け
        return $this->id . ': ' . $this->title . '(' . $this->person->name . ')';
    }

    //belongs To を使った　従から主へ逆の紐付け
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
    */
}
