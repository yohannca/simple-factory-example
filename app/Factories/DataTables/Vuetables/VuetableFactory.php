<?php

namespace App\Factories\DataTables\Vuetables;

use App\Factories\DataTables\AbstractDataTableFactory;

class VuetableFactory extends AbstractDataTableFactory
{
    protected string $classSuffix = 'Vuetable';

    protected function servicesNamespace(): string
    {
        return __NAMESPACE__ . '\\Tables';
    }
}
