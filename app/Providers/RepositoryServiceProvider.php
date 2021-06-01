<?php

namespace App\Providers;

use App\Repository\Article\ArticleRepository;
use App\Repository\Article\IArticleRepository;
use App\Repository\Base\BaseRepository;
use App\Repository\Base\IBaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBaseRepository::class, BaseRepository::class);
        $this->app->bind(IArticleRepository::class, ArticleRepository::class);
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
