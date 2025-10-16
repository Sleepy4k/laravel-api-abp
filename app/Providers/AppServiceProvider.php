<?php

namespace App\Providers;

use Dedoc\Scramble\Scramble;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();

        Scramble::configure()
            ->expose(
                ui: '/docs',
                document: '/docs/v1/openapi.json',
            );
    }
}
