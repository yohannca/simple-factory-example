<?php

namespace App\Providers;

use App\Factories\DataTables\AbstractDataTableFactory;
use App\Factories\DataTables\Vuetables\VuetableFactory;
use Illuminate\Support\ServiceProvider;

class DataTableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AbstractDataTableFactory::class, VuetableFactory::class);
    }
}
