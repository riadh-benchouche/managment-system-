<?php

namespace App\Notifications;

use App\Immo;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewProductCreated extends Notification
{
    use Queueable;
    protected $immo;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Immo $immo)
    {
        //
        $this->immo = $immo;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }



    public function toArray($notifiable)
    {
        return[
            'productId' => $this->immo->id,
            'productName' => $this->immo->prod_name,
        ];
    }
}
