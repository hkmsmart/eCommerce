<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
       if(Auth::check() && Auth::user()->role == 'admin'){
            return $next($request);
       }
       else{
           return redirect('/admin/login')->with('message','Lütfen giriş yapınız.')->with('statu','danger');
       }
    }
}
