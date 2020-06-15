<?php

namespace App\Listeners;

use App\Historic;
use App\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Request;

class NewproductCreatedListener
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */

    public function __construct()
    {

    }

    public function handle($event)
    {

        $notification = New Notification();

        $notification->type='Création';
        $notification->prod_id= $event->immo->id;
        $notification->prod_name= $event->immo->prod_name;
        $notification->prod_service= $event->immo->services->service_name;
        $notification->created_at = $event->immo->created_at;

            $notification->save();

        $historic = New Historic();
        $historic->prod_id =$event->immo->id;
        $historic->time_ass = $event->immo->created_at;
        $historic->service_pres = $event->immo->services->service_name;

        $historic ->save();


    }
}
