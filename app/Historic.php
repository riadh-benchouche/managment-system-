<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    public $table = 'historic';

    public function immos(){

        return $this ->belongsTo('App\Immo' ,'prod_id' ,'id');


    }
}
