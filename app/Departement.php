<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departement extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    public $table = 'departement';

    public function services(){
        return $this ->hasMany('App\Service');
    }


}
