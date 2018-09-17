<?php

namespace App\Http\Middleware;

use Closure;
use\App\User;
use Session;
class othstatus
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
        $user=User::where('id',Session::get('user_id'))->first();
        if($user->oth_status!=1)
         {
           return redirect('oth');
         }
        return $next($request);
    }
}
