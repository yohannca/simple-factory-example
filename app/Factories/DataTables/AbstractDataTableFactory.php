<?php

namespace App\Factories\DataTables;

use App\Exceptions\DataTableException;
use App\Factories\DataTables\Interfaces\DataTableInterface;
use Illuminate\Support\Str;

abstract class AbstractDataTableFactory
{
    protected string $classSuffix = '';

    abstract protected function servicesNamespace(): string;

    public function get(string $serviceName): DataTableInterface
    {
        $class = $this->servicesNamespace().'\\'.Str::studly($serviceName).$this->classSuffix;

        if (! class_exists($class)) {
            DataTableException::dataTableNotFound($class, $serviceName);
        }

        if (! is_a($class, DataTableInterface::class)) {
            DataTableException::dataTableInterfaceNotImplemented($class);
        }

        return new $class;
    }
}
