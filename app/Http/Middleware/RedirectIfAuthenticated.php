<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $default = false)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        elseif (Auth::guard('vendor')->check()) {
            return redirect('/vendor/profile');
        }
        return $next($request);
    }
}