<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
/* {{@snippet:begin_class}} */

class AuthServiceProvider extends ServiceProvider
{
    /* {{@snippet:begin_variables}} */

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        /* {{@snippet:policy_mapping}} */
    ];

    /* {{@snippet:end_variables}} */

    /* {{@snippet:begin_methods}} */

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /* {{@snippet:begin_boot_method}} */

        $this->registerPolicies();
        
        /* {{@snippet:end_boot_method}} */
    }

    /* {{@snippet:end_methods}} */

}
/* {{@snippet:end_class}} */