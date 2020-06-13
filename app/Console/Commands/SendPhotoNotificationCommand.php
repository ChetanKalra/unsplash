<?php

namespace App\Console\Commands;

use App\User;
use App\Photo;
use Illuminate\Console\Command;
use App\Mail\PhotoNotificationMail;
use Illuminate\Support\Facades\Mail;

class SendPhotoNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will fetch random photo and will send to all the users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where('is_admin', 0)->get();
        $photo = Photo::inRandomOrder()->first();

        foreach($users as $user)
        {
            Mail::to($user->email)->queue(new PhotoNotificationMail($photo));
        }
    }
}
