<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Events\ContactUsEvent;
use App\Events\SubscribeEvent;
use Illuminate\Support\Carbon;
use App\Mail\ContactMail;
use App\Mail\SubscribeMail;
use Illuminate\Database\Eloquent\Model;


class EventSubscriber extends Model
{
    /**
     * Handle user login events.
     */
    public function onContactUs($event)
    {
        $user = $event->contact;
        Mail::to(env('COMPANY_EMAIL'))
            ->send(new ContactMail($user));
    }
    public function onSubscribe($event)
    {
        dd($event);
        $user = $event->subscribe;
        Mail::to('demo@mail.com')
            ->send(new SubscribeMail('hero'));
    }

    

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\ContactUsEvent',
            'App\Listeners\EventSubscriber@onContactUs'
        );
        $events->listen(
            'Illuminate\Auth\Events\SubscribeEvent',
            'App\Listeners\EventSubscriber@onSubscribe'
        );

      
    }
}
