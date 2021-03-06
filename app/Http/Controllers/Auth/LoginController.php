<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {

        $credentials = $request->only($this->username(), 'password');
        $credentials['verified_mail']=1;

        return $credentials;
    }


    protected function sendFailedLoginResponse(Request $request)
    {

        $errors = [$this->username() => trans('auth.failed')];

       /* throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);*/

        // Load user from database

        $user = User::where($this->username(), $request->{$this->username()})->first();


        if ($user && \Hash::check($request->password, $user->password) && $user->verified_mail != 1) {
            $errors = [$this->username() => 'Your account is not active.'];
        }

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }


        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);

    }



}
