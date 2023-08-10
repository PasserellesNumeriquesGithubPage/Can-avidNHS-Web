<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userRole)
    {
        if (Auth::check()) {
            if (auth()->user()->role == $userRole) {
                return $next($request);
            } else {
                return redirect()->route('user.home');
            }
        } else {
            // Redirect unauthenticated users to login dashboard
            return redirect()->route('user.login');
        }
    }
}
