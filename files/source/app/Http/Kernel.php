<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
/* {{@snippet:begin_class}} */


class Kernel extends HttpKernel
{
    /* {{@snippet:begin_properties}} */

    /* {{@snippet:begin_middleware}} */
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        /* {{@snippet:begin_middleware_array}} */
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        /* {{@snippet:end_middleware_array}} */
    ];
    /* {{@snippet:end_middleware}} */

    /* {{@snippet:begin_middleware_groups}} */
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        /* {{@snippet:begin_middleware_groups_array}} */
        'web' => [
            /* {{@snippet:begin_middleware_groups_web_array}} */
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            /* {{@snippet:end_middleware_groups_web_array}} */
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        /* {{@snippet:end_middleware_groups_array}} */
    ];
    /* {{@snippet:end_middleware_groups}} */

    /* {{@snippet:begin_route_middleware}} */
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        /* {{@snippet:begin_route_middleware_array}} */
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        /* {{@snippet:end_route_middleware_array}} */
    ];
    /* {{@snippet:end_route_middleware}} */

    /* {{@snippet:begin_middleware_priority}} */
    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        /* {{@snippet:begin_middleware_priority_array}} */
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\Authenticate::class,
        \Illuminate\Routing\Middleware\ThrottleRequests::class,
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Auth\Middleware\Authorize::class,
        /* {{@snippet:end_middleware_priority_array}} */
    ];
    /* {{@snippet:end_middleware_priority}} */

    /* {{@snippet:end_properties}} */
}

/* {{@snippet:end_class}} */