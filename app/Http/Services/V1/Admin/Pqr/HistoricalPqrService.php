<?php

namespace App\Http\Services\V1\Admin\Pqr;

use App\Http\Services\Singleton;
use Livewire\Component;

class HistoricalPqrService extends Singleton
{
    public function mount(Component $component, $model)
    {
        $component->model = $model;
    }
}
