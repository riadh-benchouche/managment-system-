<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Immo extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    public $table = 'immo';

    public function user(){

        return $this ->belongsTo('App\User');
    }
   public function Transfert(){

        return $this ->hasOne('App\Transfert');
    }

}
