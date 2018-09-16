<?php

namespace App\Http\Middleware;

use Closure;

class Checkadminlogin
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
        if(!\Session::has('admin_id'))
        {
           return redirect('admin'); 
            
        }
        
        return $next($request);
    }
}
