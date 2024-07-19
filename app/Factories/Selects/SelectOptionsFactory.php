<?php

namespace App\Factories\Selects;

use App\Exceptions\SimpleFactoryException;
use App\Factories\Selects\Interfaces\SelectOptionsInterface;
use Illuminate\Support\Str;

class SelectOptionsFactory
{
    public static function get(string $options): SelectOptionsInterface
    {
        $class = __NAMESPACE__.'\\Options\\'.Str::studly($options);

        if (! class_exists($class)) {
            SimpleFactoryException::classNotFound($class, $options);
        }

        if (! is_a(new $class, SelectOptionsInterface::class)) {
            SimpleFactoryException::interfaceNotImplemented($class);
        }

        return new $class;
    }
}
