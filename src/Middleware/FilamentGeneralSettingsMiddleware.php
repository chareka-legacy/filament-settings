<?php

namespace Chareka\FilamentSettings\Middleware;

use Chareka\FilamentSettings\Models\GeneralSetting;
use Closure;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FilamentGeneralSettingsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = GeneralSetting::first();

        if ($settings?->theme_color) {
            FilamentColor::register([
                'primary' => $settings->theme_color,
            ]);
        }

        if ($settings?->site_name) {
            config([
                'app.name' => $settings->site_name,
            ]);
        }

        return $next($request);
    }
}
