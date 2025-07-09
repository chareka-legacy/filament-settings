<?php

use Chareka\FilamentSettings\Models\GeneralSetting;
use Chareka\FilamentSettings\Services\GeneralSettingsService;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

if (! function_exists('setting')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function setting($key, $default = null)
    {
        return data_get(settings(), $key, $default);
    }
}

if (! function_exists('settings')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function settings()
    {
        $service = app(GeneralSettingsService::class, [GeneralSetting::query()]);
        $setting = $service->get();

        return Arr::except([
            ...$setting?->toArray() ?? [],
            ...$setting?->seo_metadata ?? [],
            ...$setting?->email_settings ?? [],
            ...$setting?->social_network ?? [],
            ...$setting?->more_configs ?? [],
        ], [
            'id', 'created_at', 'updated_at',
        ]);
    }
}
