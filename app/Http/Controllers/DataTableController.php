<?php

namespace App\Http\Controllers;

use App\Factories\DataTables\AbstractDataTableFactory;
use App\Factories\DataTables\Facades\DataTable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DataTableController extends Controller
{
    public function __invoke(Request $request, string $tableName, mixed $param = null): AnonymousResourceCollection
    {
        $dataTable = DataTable::get($tableName);
        // $dataTable = resolve(AbstractDataTableFactory::class)->get($tableName);

        $dataTable->authorisation($param);

        return $dataTable->resourceCollection($param);
    }
}
