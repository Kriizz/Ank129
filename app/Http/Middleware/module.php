<?php

namespace App\Http\Middleware;

use Closure;

class Module
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $moduleName
     * @return mixed
     */
    public function handle($request, Closure $next, $moduleName)
    {
        if (config('app.module.'.$moduleName) != true)
        {
            return abort(404);
        }

        return $next($request);
    }
}
