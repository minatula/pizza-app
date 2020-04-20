<?php

namespace App\Http\Middleware;

use App\Currency;
use Closure;
use Illuminate\Support\Facades\View;

class CurrentCurrency
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
        View::share([
            'currentCurrency' => Currency::byCode(session('currency', 'USD'))->first()
        ]);
        return $next($request);
    }
}
