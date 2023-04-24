<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::guard('admin')->user() && get_class(Auth::guard('admin')->user()) === Admin::class) {
                    return redirect()->route('admin.index');
                }
            }
        }
        return $next($request);
    }
}
