<?php

namespace App\Http\Middleware;

use Closure;

class Openhour
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
        echo date('d/m/Y H:i:s');
        $h = date('H');
        if($h <8 || $h>=17){
            return redirect('/dong-cua');
        }
        return $next($request);
    }
}
