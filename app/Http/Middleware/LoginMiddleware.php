<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{

    public function __construct()
    {

    }

    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo 'here asdfadsf ';

        return $next($request);
    }

}