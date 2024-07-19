<?php

namespace App\Exceptions;

use Exception;

class DataTableException extends Exception
{
    /**
     * @return static
     */
    public static function dataTableNotFound(string $class, string $serviceName)
    {
        return new static("The service `$class` was not found for the following service: $serviceName.");
    }

    /**
     * @return static
     */
    public static function dataTableInterfaceNotImplemented(string $class)
    {
        return new static("The DataTableInterface was not implemented for this service class: $class");
    }
}
