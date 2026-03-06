<?php

namespace Yebto\TextAPI;

use Illuminate\Support\ServiceProvider;

class TextAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/yebto-text.php', 'yebto-text');

        $this->app->singleton('yebto-text', function () {
            return new TextAPI(config('yebto-text'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/yebto-text.php' => config_path('yebto-text.php'),
        ], 'yebto-text-config');
    }
}
