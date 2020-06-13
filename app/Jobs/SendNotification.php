<?php

namespace App\Jobs;

use App\User;
use App\Notification;
use Illuminate\Bus\Queueable;
use Mail;
use Session;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $photo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($photo)
    {
        $this->photo = $photo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $adminUsers = User::where('is_admin', 1)->get();

        foreach($adminUsers as $adminUser)
        {
            Mail::to($adminUser->email)->queue(new NewPhotoMail($photo));

            // $notification = Notification::create([
            //     'user_id' => $adminUser->id,
            //     'message' => 'New Photo Uploaded #ID' . $this->photo->id,
            // ]);
        }
    }
}
