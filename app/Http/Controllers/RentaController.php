<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use Illuminate\Http\Request;

/**
 * Class RentaController
 * @package App\Http\Controllers
 */
class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentas = Renta::paginate();

        return view('renta.index', compact('rentas'))
            ->with('i', (request()->input('page', 1) - 1) * $rentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $renta = new Renta();
        return view('renta.create', compact('renta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Renta::$rules);

        $renta = Renta::create($request->all());

        return redirect()->route('rentas.index')
            ->with('success', 'Renta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $renta = Renta::find($id);

        return view('renta.show', compact('renta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $renta = Renta::find($id);

        return view('renta.edit', compact('renta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Renta $renta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renta $renta)
    {
        request()->validate(Renta::$rules);

        $renta->update($request->all());

        return redirect()->route('rentas.index')
            ->with('success', 'Renta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $renta = Renta::find($id)->delete();

        return redirect()->route('rentas.index')
            ->with('success', 'Renta deleted successfully');
    }
}
