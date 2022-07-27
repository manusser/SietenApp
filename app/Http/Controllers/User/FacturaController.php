<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::where('user_id', auth()->id())->orderBy('id', 'desc')->paginate(5);
        return view('user.facturas.index', compact('facturas'));
    }

    public function show(Factura $factura)
    {

        return view('user.facturas.show', compact('factura'));
    }
}
