<?php

namespace App\Factories\DataTables\Vuetables\Tables;

use App\Factories\DataTables\Interfaces\DataTableInterface;
use App\Factories\DataTables\Vuetables\Columns\Action;
use App\Factories\DataTables\Vuetables\Columns\ColumnItem;
use App\Factories\DataTables\Vuetables\Columns\Component;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;

class UsersVuetable implements DataTableInterface
{
    public function authorisation(mixed $arguments = []): Response
    {
        return Gate::authorize('viewAny', User::class);
    }

    public function resourceCollection(mixed $param = null): AnonymousResourceCollection
    {
        $query = QueryBuilder::for(User::class);

        return JsonResource::collection($query->paginate(self::DEFAULT_PAGINATION));
    }

    public function fields(): Collection
    {
        return collect([
            ColumnItem::make('id', '', false),
            ColumnItem::make('first_name', 'First name', true),
            ColumnItem::make('last_name', 'Last name', true),
            Component::make('__component:status-column', 'status_id', 'Status'),
            Action::make(),
        ]);
    }
}
