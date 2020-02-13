<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

       //check for Admin
       //return true if auth user type is admin
       $gate->define('isAdmin',function($user){
           return $user->user_type=='admin';
       });

       
       //check for Author
       //return true if auth user type is author
       $gate->define('isAuthor',function($user){
        return $user->user_type=='author';
    });

    
       //check for Editor
       //return true if auth user type is editor
       $gate->define('isEditor',function($user){
        return $user->user_type=='editor';
    });
    }
}
