<?php

namespace App\Http\Middleware;

use Closure;

class CekPeran
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $peran)
    {
        if ($request->session()->has("username")) {
            return $next($request);
        } else {
            switch ($peran) {
                case 'dinas':
                    return redirect("/dinas");
                    break;
                case 'perusahaan':
                    return redirect("/perusahaan");
                    break;
                case 'user':
                    return redirect("/");
                    break;
            }
        }
    }
}
