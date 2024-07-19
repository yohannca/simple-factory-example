<?php

namespace App\Factories\DataTables\Vuetables\Columns;

use Illuminate\Support\Str;

class Component
{
    public static function make(
        string $name,
        string $field,
        ?string $title = null,
        null|string|bool $sortField = true,
        string $dataClass = 'px-3 py-4 text-sm text-gray-500 hidden lg:table-cell break-words',
    ): array {
        $column = [
            'name' => $name,
            'title' => is_null($title) ? Str::title(str_humanize($name)) : $title,
            'field' => $field,
            'dataClass' => $dataClass,
        ];

        if ($sortField) {
            $column['sortField'] = is_bool($sortField) ? $field : $sortField;
        }

        return $column;
    }
}
