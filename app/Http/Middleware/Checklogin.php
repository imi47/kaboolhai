<?php

namespace App\Http\Middleware;

use Closure;
use\App\User;
// use Session;
class Checklogin
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
        $user=User::where('id',\Session::get('user_id'))->first();
        
        if(!\Session::has('user_id'))
        {
            return redirect('login');
            
        }
        if($user->oth_status==0)
         {
           return redirect('oth');
         }


       
        return $next($request);
    }
}
