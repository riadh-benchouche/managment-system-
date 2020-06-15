<?php

namespace App\Listeners;

use App\Historic;
use App\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductTransferedListener
{

    public function handle($event)
    {
        $notification = New Notification();

        $notification->type='Transfer';
        $notification->prod_id= $event->immo->id;
        $notification->prod_name= $event->immo->prod_name;
        $notification->prod_service= $event->immo->services->service_name;
        $notification->updated_at = $event->immo->time_trans;

        $notification->save();


        $historic = New Historic();
        $historic->prod_id =$event->immo->id;
        $historic->time_ass = $event->immo->created_at;
        $historic->service_pres = $event->immo->services->service_name;
        $historic->time_trans = $event->immo->time_trans;

        $historic ->save();
    }
}
