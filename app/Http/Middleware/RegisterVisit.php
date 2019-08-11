<?php

namespace App\Http\Middleware;

use Closure;
use App\Visit;

class RegisterVisit
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
        $geoip = geoip($request->getClientIp());
        
        foreach(['ip', 'iso_code', 'country', 'city', 'state', 'state_name', 'postal_code', 'lat', 'lon', 'timezone', 'continent', 'currency'] as $col) $visit[$col] = $geoip->$col;

        Visit::create($visit);

        return $next($request);
    }
}
