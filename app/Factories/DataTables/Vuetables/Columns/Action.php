<?php

namespace App\Factories\DataTables\Vuetables\Columns;

class Action
{
    public static function make(): array
    {
        return [
            'name' => 'actions',
            'title' => '',
            'sortField' => false,
            'dataClass' => 'actions',
        ];
    }
}
