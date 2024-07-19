<?php

namespace App\Factories\DataTables\Vuetables\Columns;

use Illuminate\Support\Str;

class ColumnItem
{
    public static function make(
        string $name,
        ?string $title = null,
        string|bool $sortField = true,
        string $dataClass = 'px-3 py-4 text-sm text-gray-500 hidden lg:table-cell break-words',
        ?string $width = null,
        ?string $overrideDisplay = null,
        ?string $style = null,
        ?string $type = null,
    ): array
    {
        $column = [
            'name' => $name,
            'title' => is_null($title) ? Str::title(str_humanize($name)) : $title,
        ];

        if ($sortField) {
            $column['sortField'] = is_bool($sortField) ? $name : $sortField;
        }

        if ($dataClass) {
            $column['dataClass'] = $dataClass;
        }
        if ($width) {
            $column['width'] = $width;
        }
        if ($style) {
            $column['style'] = $style;
        }
        if ($type) {
            $column['type'] = $type;
        }
        if ($overrideDisplay) {
            $column['formatted'] = $overrideDisplay;
            $column['name'] = $overrideDisplay;
        }

        return $column;
    }
}
