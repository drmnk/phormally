<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Сделаем работу с Eloquent более правильной:
         * - Отключим "ленивую" загрузку для борьбы с N+1
         * - Запретим отбрасывать поля, которые есть в массиве данных, но нет в $fillable
         * - Запретим обращаться к свойствам Модели, которых нет
         */
//        Model::shouldBeStrict(!$this->app->isProduction());
    }
}
