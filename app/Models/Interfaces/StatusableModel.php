<?php

namespace App\Models\Interfaces;

use Illuminate\Auth\Access\Response;

interface StatusableModel
{
    public function authorizeChangeStatus(): Response;

    public function state();
}