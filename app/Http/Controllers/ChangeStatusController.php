<?php

namespace App\Http\Controllers;

use App\Models\Interfaces\StatusableModel;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ChangeStatusController extends Controller
{
    public function __invoke(Request $request, string $modelName, int $id, string $transition): JsonResource
    {
        $class = 'App\\Models\\'.Collection::make(explode('-', $modelName))
                ->map(fn ($segment) => Str::studly($segment))
                ->implode('\\');

        if (! is_subclass_of($class, Model::class)) {
            throw new Exception("The given {$class} is not a Model");
        }

        $model = $class::findOrFail($id);

        if (! is_a($model, StatusableModel::class)) {
            throw new Exception("{$model} does not implement the StatusableModel interface.");
        }

        $model->authorizeChangeStatus();

        $model->state()->{$transition}();

        return new JsonResource($model->refresh()->status);
    }
}
