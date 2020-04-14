<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfert extends Model
{

    public $table = 'transfert';

    public function immo(){

        return $this ->hasOne('App\Immo')->withDefault();
    }




}

