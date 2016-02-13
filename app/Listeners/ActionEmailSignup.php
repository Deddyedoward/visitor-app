<?php

namespace App\Listeners;

use Mail;
use App\Events\EmailSignup;
use App\Visitor;
use App\Admin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Controller;

class ActionEmailSignup
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
     * @param  EmailSignup  $event
     * @return void
     */
    public function handle(EmailSignup $event)
    {

      $admin = Admin::findOrfail(1);

      Mail::send('emails.notification', ['data' => $event->getData() ], function($mail) use ($admin){
         $mail->from('dont-reply-gojek@gojek.com', 'Visitor notification');
         $mail->to($admin->email,"Admin")->subject('Email notification');
      });

    }
}
