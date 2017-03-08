<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticatedMiddleware
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
<<<<<<< Updated upstream
        if(Auth::check())
            return $next($request);

=======
        if (Auth::check())
            return $next($request);
>>>>>>> Stashed changes
        return redirect('/login');
    }
}
