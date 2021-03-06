<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Auth\UserSignedUp' => [
            'App\Listeners\Auth\SendActivationEmail',
        ],
        'App\Events\Auth\UserRequestedActivationEmail' => [
            'App\Listeners\Auth\SendActivationEmail',
        ],
        'App\Events\TicketReplyCreated' => [
            'App\Listeners\SendTicketReplyEmail',
        ],
        'App\Events\TicketCreated' => [
            'App\Listeners\SendTicketCreatedEmail',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
