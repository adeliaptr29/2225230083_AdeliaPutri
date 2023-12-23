<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika pengguna sudah login
        if (Auth::check()) {
            // Lanjutkan request ke halaman yang diinginkan
            return $next($request);
        }
        // Jika pengguna belum login
        else {
            // Arahkan pengguna ke halaman login
            return redirect('/login');
        }
    }
}
