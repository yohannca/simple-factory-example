<?php

namespace App\Factories\DataTables\Interfaces;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Collection;

interface DataTableInterface
{
    public const DEFAULT_PAGINATION = 20;

    /**
     * Authorize a given action for the current user.
     *
     * @param  mixed  $arguments
     * @return Response
     */
    public function authorisation(mixed $arguments = []): Response;

    /**
     * Builds the table content/query.
     *
     * @param  ?mixed  $param
     * @return AnonymousResourceCollection
     */
    public function resourceCollection(mixed $param = null): AnonymousResourceCollection;

    /**
     * A collection of column items for our table header/content.
     *
     * @return Collection
     */
    public function fields(): Collection;
}
