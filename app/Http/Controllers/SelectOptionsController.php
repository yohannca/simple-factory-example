<?php

namespace App\Http\Controllers;

use App\Factories\Selects\SelectOptionsFactory;
use Illuminate\Http\Request;

class SelectOptionsController extends Controller
{
    public function __invoke(Request $request, string $option)
    {
        return SelectOptionsFactory::get($option)->options($request);
    }
}
