<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'notifications';

    public function immos(){
        return $this ->belongsTo('App\Immo');
    }
}
