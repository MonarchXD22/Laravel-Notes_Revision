<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Echo from AgeCheck";
        // http://127.0.0.1:8000/home?country=india&age=20 thats when it will work
        // echo "<pre>";
        // print_r($request->age);
        if($request->age<18){
            die('You can not visit this site beacuse age less then 18');
        }
        return $next($request);
    }
}
