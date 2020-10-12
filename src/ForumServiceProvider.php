<?php

namespace MeinderA\LaravelForum;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([__DIR__ . '/config/forum.php' => config_path('forum.php')], 'forum-config');
        $this->publishes([__DIR__ . '/database/seeders/' => database_path('seeders')], 'forum-seeders');
        $this->publishes([__DIR__ . '/controllers/' => app_path('Http/Controllers')], 'forum-controllers');
        $this->publishes([__DIR__ . '/models/', app_path('Models')], 'forum-models');

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadTranslationsFrom(__DIR__ . '/langs/', 'forum');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }
}