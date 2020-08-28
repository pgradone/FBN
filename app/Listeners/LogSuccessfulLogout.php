<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

use App\LogoutHistory;
use App\LoginHistory;
use \Carbon\Carbon;
use DateTime;

class LogSuccessfulLogout
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
    public function handle(Logout $event)
    {   
    // $log = LoginHistory::where('user_name', $event->user->name)->first();

    //     if($log) 
    //     {
    //         //logout timestamp store.
    //         $log->last_logout_at = date('Y-m-d H:i:s');
    //         $log->save();

    //         //calculate time_worked 
    //         $strStart = Carbon::now(); 
    //         $strEnd   = $log->last_login_at;      
    //         $dteStart = new DateTime($strStart); 
    //         $dteEnd   = new DateTime($strEnd);      
    //         $dteDiff  = $dteStart->diff($dteEnd); 
    //         // print $dteDiff->format("%H:%I:%S"); 
    //         // dd($dteDiff);
    //         $log->time_worked = $dteDiff->format("%H:%I:%S");
    //         $log->save();
    //     }
    }
}