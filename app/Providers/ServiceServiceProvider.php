<?php

namespace App\Providers;

use App\Service\Article\ArticleService;
use App\Service\Article\IArticleService;
use App\Service\Base\BaseService;
use App\Service\Base\IBaseService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBaseService::class, BaseService::class);
        $this->app->bind(IArticleService::class, ArticleService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
