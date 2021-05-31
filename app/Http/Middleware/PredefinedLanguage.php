<?php

namespace App\Http\Middleware;

use App\Models\Idioma;
use Closure;
use Illuminate\Http\Request;

class PredefinedLanguage
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
        if (session()->has('language')) {
            app()->setLocale(session()->get('language'));
        } else {
            $defaultLanguage = Idioma::where('active', 1)
                ->where('defecto', 1)
                ->first();
            if ($defaultLanguage) {
                app()->setLocale($defaultLanguage->abbr);
            }
        }
        return $next($request);
    }
}
