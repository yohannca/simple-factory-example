<?php

namespace App\Factories\Selects\Options;

use App\Factories\Selects\Interfaces\SelectOptionsInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Users implements SelectOptionsInterface
{
    public function options(Request $request): Collection
    {
        return User::orderBy('name')->get()->map(fn (User $user) => [
            'label' => $user->name,
            'value' => $user->id,
        ]);
    }
}
