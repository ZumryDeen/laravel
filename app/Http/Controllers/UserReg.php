<?php

namespace App\Http\Controllers;

use App\Jobs\SendSuccessMail;
use Illuminate\Http\Request;

class UserReg extends Controller
{
    //

    public function processQueue()
    {
        $sendmail = new SendSuccessMail();
        $this->dispatch($sendmail);
    }


}
