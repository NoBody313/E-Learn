<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return $this->redirectTo($guard);
        }

        return $next($request);
    }

    protected function redirectTo($guard)
    {
        switch ($guard) {
            case 'users':
                return redirect()->route('admin.dashboard');
            default:
                return redirect('/home');
        }
    }
}
