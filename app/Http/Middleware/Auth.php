<?php

namespace App\Http\Middleware;
use Session;

use Closure;
use App\User;


class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
        
        return $next($request);


        
       
        }
    }

