<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthentificate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!\Auth::check()) {
            return redirect()->route('login');
        }

        if (!\Auth::user()->is_editor) {
            abort(404);
        }

        if (\Gate::denies('admin')) {
            return redirect()->route('dash.auth.index');
        }

        return $next($request);
    }
}
