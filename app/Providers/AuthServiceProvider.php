<?php

namespace App\Providers;

use App\Models\user;
use App\Models\Acero;
use App\Models\Team;
use App\Policies\AceroPolicy;
use App\Policies\TeamPolicy;    
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Acero::class => AceroPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin-aceros', function(User $user){
                 return $user->tipo == 'tipo_de_calibre';
        });
    }
}
