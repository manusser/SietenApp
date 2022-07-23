<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presupuesto;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $presupuestos = Presupuesto::all();
        $users = User::all();

        return view('admin.index', compact('presupuestos', 'users'));
    }
}
