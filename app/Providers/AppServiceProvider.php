<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use App\FormFields\Tracking;
use App\Models\Estado;
use App\Observers\EstadoObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(Tracking::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::addAction(\App\Actions\Roles::class);

        Voyager::addAction(\App\Actions\Blocks::class);
        Voyager::addAction(\App\Actions\BlockEdit::class);
        Voyager::addAction(\App\Actions\Block::class);
        Voyager::addAction(\App\Actions\Cuenta::class);

        Estado::observe(EstadoObserver::class);
    }
}
