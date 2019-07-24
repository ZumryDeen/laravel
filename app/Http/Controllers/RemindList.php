<?php

namespace App\Http\Controllers;

use App\Events\NewOrder;
use App\Jobs\SendDueRemindMails;
use App\Notifications\Taskcomplete;
use App\Notifications\TaskstatusDB;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RemindList extends Controller
{
    //


    public function dueRemind()
    {

        $job = (new SendDueRemindMails())->delay(Carbon::now()->addSeconds(10));

        dispatch($job);
        return "JOb have Been Called !";

    }


    public function EventCall()
    {

        $user = Auth::user();

    }

    public function NotifyMails()
    {
        // delay the mail
        $when = Carbon::now()->addSeconds(2);
        $users = User::findMany([1, 2]);
        // to one user
        //User::find(1)->notify((New Taskcomplete())->delay($when));



        foreach ($users as $to) {
            $to->notify((New Taskcomplete())->delay($when));
        }

        return "Task notification sent";
    }

    public function NotifyDB()
    {
        // delay the mail
        $when = Carbon::now()->addSeconds(2);
        $users = User::findMany([1, 2]);
        // to one user
        //User::find(1)->notify((New Taskcomplete())->delay($when));

      //die(auth()->user()->id);

        auth()->user()->notify((New TaskstatusDB())->delay($when));

      /*  foreach ($users as $to) {
            $to->notify((New TaskstatusDB())->delay($when));
        }*/

        return "Task notification sent";
    }

}
