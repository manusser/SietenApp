<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presupuesto;
use Illuminate\Http\Request;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuestos = Presupuesto::all();
        return view('admin.presupuestos.index', compact('presupuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.presupuestos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required',
            'user_id' => 'required'
        ]);

        Presupuesto::create($request->all());

        return redirect()->route('admin.presupuestos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Presupuesto $presupuesto)
    {
        return view('admin.presupuestos.index', compact('presupuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Presupuesto $presupuesto)
    {
        return view('admin.presupuestos.edit', compact('presupuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presupuesto $presupuesto)
    {

        $presupuesto->update($request->all());

        return redirect()->route('admin.presupuestos.index', $presupuesto);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presupuesto $presupuesto)
    {
        $presupuesto->delete();

        return redirect()->route('admin.presupuestos.index');
    }
}
