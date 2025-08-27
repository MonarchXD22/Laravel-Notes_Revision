<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // http://127.0.0.1:8000/home?country=india&age=20 thats when it will work
        if($request->country!="india"){
            die('You can not access this website outside India');
        }
        return $next($request);
    }
}
