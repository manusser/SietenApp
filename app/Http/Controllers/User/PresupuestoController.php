<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Presupuesto;
use Illuminate\Http\Request;

class PresupuestoController extends Controller
{
    public function index(){
        $presupuestos = Presupuesto::where('user_id', auth()->user()->id)->paginate(5);

        return view('user.presupuestos.index', compact('presupuestos'));
    }

    public function show(Presupuesto $presupuesto){
        
        return view('user.presupuestos.show', compact('presupuesto'));
    }
}
