<?php

namespace App\Listeners;

use App\Historic;
use App\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductRepareListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $notification = New Notification();

        $notification->type='Réparation';
        $notification->prod_id= $event->immo->id;
        $notification->prod_name= $event->immo->prod_name;
        $notification->prod_service= $event->immo->services->service_name;
        $notification->updated_at = $event->immo->time_rep;

        $notification->save();

        $historic = Historic::find($event->immo->id);

        $historic->time_rep = $event->immo->time_rep;
        $historic->number_rep = $event->immo->number_rep+1;

        $historic ->save();
    }
}
