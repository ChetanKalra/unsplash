<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\NewPhotoUpload::class => [
            \App\Listeners\NotifyAdmin::class,
            \App\Listeners\ResizeUploadedImage::class,
        ],
        
        \App\Events\NewUserCreated::class => [
            \App\Listeners\SendWelcomeEmail::class,
        ],

        \App\Events\NewOrderPlaced::class => [
            \App\Listeners\NotifyLogistics::class,
            \App\Listeners\OrderPlacedMail::class,
            \App\Listeners\CheckStock::class,
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
