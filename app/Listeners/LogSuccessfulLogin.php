<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use App\LoginHistory;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */

    // public function handle(Login $event)
    // {

    //     LoginHistory::create([
    //         'user_name' => $event->user->name,
    //         'last_login_at' => date('Y-m-d H:i:s'),
    //         'last_login_ip' => $this->request->ip(),
    //     ]);

    //     $user = $event->user;
    //     $user->last_login_at = date('Y-m-d H:i:s');
    //     $user->last_login_ip = $this->request->ip();
    //     $user->save();
    // }
}