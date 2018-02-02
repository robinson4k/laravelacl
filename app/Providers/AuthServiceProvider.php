<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Permission;

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
    public function boot()
    {
        $this->registerPolicies();

		foreach ($this->listPermission() as $permission) {
            Gate::define($permission->name, function($user) use($permission) {
                return $user->hasRole($permission->roles) || $user->isSuperAdmin();
                // return $user->hasRole($permission->roles);
            });
        }
    }

	public function listPermission()
    {
        return Permission::with('roles')->get();
    }
}
