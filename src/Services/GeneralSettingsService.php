<?php

namespace Chareka\FilamentSettings\Services;

use Chareka\FilamentSettings\Models\GeneralSetting;
use Illuminate\Support\Facades\Cache;

class GeneralSettingsService
{
    public function __construct(
        public GeneralSetting $generalSetting
    ) {}

    public function get(): ?GeneralSetting
    {
        return Cache::remember('general_settings', config('filament-general-settings.expiration_cache_config_time'), callback: function () {
            return $this->generalSetting->first();
        });
    }
}
