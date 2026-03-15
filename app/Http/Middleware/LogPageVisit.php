<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogPageVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Page visited', [
            'url'    => $request->fullUrl(),
            'method' => $request->method(),
            'ip'     => $request->ip(),
        ]);

        return $next($request);
    }
}