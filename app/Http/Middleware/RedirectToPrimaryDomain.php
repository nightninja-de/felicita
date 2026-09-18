<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToPrimaryDomain
{
    /**
     * The one domain search engines should index. Every other host this
     * app answers on (the .com, a bare www, the .onrender.com URL, etc.)
     * permanently redirects here to avoid duplicate-content SEO penalties.
     */
    private const PRIMARY_HOST = 'felicitarestaurant.de';

    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if (app()->environment('production') && $host !== self::PRIMARY_HOST && ! $request->is('up')) {
            return redirect()->away(
                'https://'.self::PRIMARY_HOST.$request->getRequestUri(),
                301
            );
        }

        return $next($request);
    }
}
