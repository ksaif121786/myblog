<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    protected $redirectTo = 'admin';

    public function handle(Request $request, Closure $next, $guard='web')
    {
        
        if(!Auth::guard($guard)->check() && !Auth::guard('admin')->check()){

          return redirect('admin');
        }
        return $next($request);
    }
}
