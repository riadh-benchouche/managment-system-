<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class Immo extends Model
{
    use Notifiable;

    use SoftDeletes;
    protected $dates=['deleted_at'];
    public $table = 'immo';

    public function users(){

        return $this ->belongsTo('App\User');
    }
    public function services(){
        return $this ->belongsTo('App\Service', 'service_id' ,'service_id');
    }
    public function historics() {

        return  $this ->hasMany('App\Historic');

    }
    public function notifications() {

        return  $this ->hasMany('App\Notification');

    }

}
