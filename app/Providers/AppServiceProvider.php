<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        Carbon::setLocale('id');

        Blade::directive('date_formatted', function ($date) {
            return "<?php echo \Carbon\Carbon::parse($date)->translatedFormat('d F Y'); ?>";
        });

        Blade::directive('date_formatted_with_hour', function ($date) {
            return "<?php echo \Carbon\Carbon::parse($date)->translatedFormat('d F Y | H:i:s'); ?>";
        });

        Blade::directive('currency_idr', function ($amount) {
            return "<?php echo 'Rp. ' . number_format($amount, 0, ',', '.'); ?>";
        });

        Paginator::useBootstrap();
    }
}
