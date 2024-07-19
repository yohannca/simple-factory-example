<?php

namespace App\Factories\DataTables\Facades;

use App\Factories\DataTables\AbstractDataTableFactory;
use Illuminate\Support\Facades\Facade;

/**
 * @mixin \App\Factories\DataTables\Vuetables\VuetableFactory
 * @see \App\Factories\DataTables\AbstractDataTableFactory
 */
class DataTable extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AbstractDataTableFactory::class;
    }
}
