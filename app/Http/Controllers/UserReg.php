<?php

namespace App\Http\Controllers;


use App\Jobs\SendSuccessMail;
use Illuminate\Http\Request;
use App\User;
use App\Events\NewOrder;
use Illuminate\Bus\Queueable;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;


class UserReg extends Controller
{
    //

    public $delay = 60;

    public $tries = 3;
    public function processQueue()
    {

        $user = Auth::user();
        try {

            Log::info('=== Hello  ========');
           //Bus::dispatch(new NewOrder($user));

            dispatch(new NewOrder($user))
                ->delay(60);
            return 'hello';
        } catch(Exception $ex) {
            Log::info('Error'. $ex->getMessage());

            return $ex;
        }


        // getting user information



/*        dd($user);
exit();*/
       // $job = (new FetchConditions($city))->delay(1);

/*  $job = (new NewOrder($user))->delay(Carbon::now()->addSeconds(10));
dispatch($job);*/


        //event(new NewOrder($user));
   // event(new NewOrder($user));
//dispatch(event(new NewOrder($user)));



       /* $sendmail = new SendSuccessMail();
        $this->dispatch($sendmail);*/
    }


}
