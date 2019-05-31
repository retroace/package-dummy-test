<?php
namespace RetroAce\PackageDummyTest\Middleware;

use Closure;
use \App\User as User;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (method_exists(\App\User::class, 'isAdmin')) {
            if (auth()->check() && auth()->user()->isAdmin()) {
                return $next($request);
            }

            return abort(403);
        }
        return abort(403, " Method isAdmin must exist on the User modal and must return boolean value");
    }
}
