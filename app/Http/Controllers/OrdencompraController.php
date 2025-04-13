<?php

namespace App\Http\Controllers;

use App\Models\Ordencompra;
use App\Models\producto;
use App\Models\Proveedore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrdencompraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrdencompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ordencompras = Ordencompra::paginate();

        return view('ordencompra.index', compact('ordencompras'))
            ->with('i', ($request->input('page', 1) - 1) * $ordencompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ordencompra = new Ordencompra();
        $productos = producto::all();
        $proveedores = Proveedore::all();

        return view('ordencompra.create', compact('ordencompra', 'productos', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdencompraRequest $request): RedirectResponse
    {
        Ordencompra::create($request->validated());

        return Redirect::route('ordencompras.index')
            ->with('success', 'Ordencompra created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ordencompra = Ordencompra::find($id);

        return view('ordencompra.show', compact('ordencompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ordencompra = Ordencompra::find($id);

        return view('ordencompra.edit', compact('ordencompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdencompraRequest $request, Ordencompra $ordencompra): RedirectResponse
    {
        $ordencompra->update($request->validated());

        return Redirect::route('ordencompras.index')
            ->with('success', 'Ordencompra updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Ordencompra::find($id)->delete();

        return Redirect::route('ordencompras.index')
            ->with('success', 'Ordencompra deleted successfully');
    }
}
