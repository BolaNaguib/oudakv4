<?php

namespace App\Http\Middleware;

use Closure;
use App;
class SetLanguage
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
        $language = $request->language ?? session('language') ?? 'en';
        \URL::defaults(compact('language'));
        \App::setlocale($language);
        session(compact('language'));
        $request->route()->forgetParameter('language');
        return $next($request);
    }
}
