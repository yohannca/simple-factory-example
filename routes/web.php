<?php

use App\Http\Controllers\ChangeStatusController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\SelectOptionsController;
use Illuminate\Support\Facades\Route;

// options/users
// options/roles
Route::get('options/{option}', SelectOptionsController::class)->name('options');

// data-table/users
Route::get('data-table/{table_name}/{param?}', DataTableController::class)->name('data-table');

// status/user/1/approve
// status/user/2/deny
Route::patch('status/{modelName}/{modelId}/{transition}', ChangeStatusController::class)->name('change-status');
