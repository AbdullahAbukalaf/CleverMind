<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the session language is set
        $lang = Session::get('lang');

        // If the language is not set, default to 'en'
        if (is_null($lang)) {
            $lang = 'en'; // Default to English
            Session::put('lang', $lang); // Optionally set it in the session
        }

        // Set the application locale
        App::setLocale($lang);
        return $next($request);
    }
}
