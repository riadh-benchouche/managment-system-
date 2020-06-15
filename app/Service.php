<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    public $table = 'service';


    public function departements(){
        return $this ->belongsTo('App\Departement','d_id' ,'departemenet_id');
    }

    public function immos(){
        return $this ->hasMany('App\Immo');
    }


}
