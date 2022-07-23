<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Presupuesto;


class PresupuestoIndex extends Component
{
    public function render()
    {

        $presupuestos = Presupuesto::paginate(5);

        return view('livewire.admin.presupuesto-index', compact('presupuestos'));
    }
}
