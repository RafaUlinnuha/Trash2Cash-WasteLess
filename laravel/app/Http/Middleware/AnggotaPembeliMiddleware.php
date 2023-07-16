<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnggotaPembeliMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna memiliki peran "anggota" atau "pembeli"
        if ($request->user() && ($request->user()->role =='anggota' || $request->user()->role == 'pembeli')) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
