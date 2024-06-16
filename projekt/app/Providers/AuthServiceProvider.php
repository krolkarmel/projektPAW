<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Enums\UserRole;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function (User $user) {
            return $user->role === UserRole::ADMIN;
        });

        Gate::define('isUser', function (User $user) {
            return $user->role === UserRole::USER;
        });

        Gate::define('isWorker', function (User $user) {
            return $user->role === UserRole::WORKER;
        });
    }
}
