<?php

namespace App\Factories\Selects\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface SelectOptionsInterface
{
    public function options(Request $request): Collection;
}
