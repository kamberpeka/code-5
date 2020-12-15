<?php

namespace App\Providers;

use App\Repositories\Eloquent\MessageBaseRepository;
use App\Repositories\Contracts\MessageBaseRepositoryInterface;
use App\Services\MessageService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MessageBaseRepositoryInterface::class,
            MessageBaseRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->instance(MessageService::class,
            new MessageService(
                new MessageBaseRepository($this->app)
            )
        );
    }
}
