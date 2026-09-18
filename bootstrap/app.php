<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Render (and most PaaS hosts) sit behind a reverse proxy that
        // terminates HTTPS and forwards to the container over HTTP. Without
        // trusting it, Symfony rejects the request as a suspicious/untrusted
        // host, which surfaces as a 400 error on every page.
        $middleware->trustProxies(at: '*');

        // Both felicitarestaurant.de and felicita-restaurant.com point at
        // this same app. Serving identical content on two domains splits
        // SEO ranking signal between them, so redirect everything to the
        // one domain we actually want indexed.
        $middleware->prepend(\App\Http\Middleware\RedirectToPrimaryDomain::class);

        $middleware->validateCsrfTokens(except: [
            'stripe/webhook',
        ]);

        $middleware->redirectGuestsTo('/staff/login');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
