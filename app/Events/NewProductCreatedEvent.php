<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewProductCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $immo;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($immo)
    {

        $this->immo = $immo;

    }

}
