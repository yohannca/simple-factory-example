<?php

namespace App\Exceptions;

use Exception;

class SimpleFactoryException extends Exception
{
    public static function classNotFound(string $class, string $serviceName)
    {
        return new static("The service `$class` was not found for the following service: $serviceName.");
    }

    /**
     * @return static
     */
    public static function interfaceNotImplemented(string $class)
    {
        return new static("The interface was not implemented for this service class: $class");
    }
}
