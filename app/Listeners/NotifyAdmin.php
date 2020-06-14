<?php

namespace App\Listeners;

use App\User;
use App\Mail\PhotoNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdmin
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
        $adminUsers = User::where('is_admin', 1)->get();

        foreach($adminUsers as $adminUser)
        {
            Mail::to($adminUser->email)->queue(new PhotoNotificationMail($event->photo));
        }
    }
}
