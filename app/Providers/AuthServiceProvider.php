<?php

namespace App\Providers;

use App\User;
use Illuminate\Http\Request;
use App\Policies\SupeUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' =>SupeUser::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // adding custom rule for auth

        Auth::viaRequest('verified-mail',function ($request){
        return User::where('verified_mail',$request->verified_mail)->first();

        });

        //
        Gate::define('super-only','SupeUser@super_user');
    }
}
