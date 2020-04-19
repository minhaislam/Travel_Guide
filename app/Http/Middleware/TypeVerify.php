<?php

namespace App\Http\Middleware;

use Closure;

class TypeVerify
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
        
            if ($request->path() !== $request->session()->get('user')->type) {
            return redirect()
                ->back();
        }

        return $next($request);
        
    }
}
