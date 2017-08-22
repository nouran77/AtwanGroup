<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LangMiddleware
{

    public function handle($request, Closure $next)
    {
        if( $request->cookie('language') )
        {
            App::setlocale($request->cookie('language'));
        }
        return $next($request);
    }
}


