<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SzerepEllenorzo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$szerepek)
    {
        $felhasznaloSzerep = auth()->user()->szerep_id;

        if (!in_array($felhasznaloSzerep, array_map('intval', $szerepek))) {
            return response()->json(['hiba' => 'Hozzáférés megtagadva'], 403);
        }

        return $next($request);
    }

}
