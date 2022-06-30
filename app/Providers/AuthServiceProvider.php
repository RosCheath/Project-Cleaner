<?php

namespace App\Providers;

use App\Models\Booking;
use App\Models\User;
use App\Policies\BookingPolicy;
use App\Policies\DashBookingPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Booking::class => BookingPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-feature', static function(User $user){
            return $user->role === 'Admin' || $user->role === 'Cleaner';
        });
        Gate::define('user-feature', static function(User $user){
            return $user->role === 'User';
        });
        Gate::define('admin_auth', static function(User $user){
            return $user->role === 'Admin';
        });
        Gate::define('cleaner_auth', static function(User $user){
            return $user->role === 'Cleaner';
        });

    }
}
