<?php

namespace App\Http\Controllers;

use App\Models\Saludo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SaludoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacto', 
        [
            'saluditos' => Saludo::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $informacion = $request->validate(
            [
                'nombre' => 'required|min:3',
                'mascota' => 'required|min:3',
                'relacion' => 'required',
                'saludo' => 'required|min:5|max:200'
            ]
        );

        Saludo::create([
            'nombre' => Str::upper($request->get('nombre')),
            'mascota' => Str::upper($request->get('mascota')),
            'relacion' => $request->get('relacion'),
            'saludo' => $request->get('saludo'),
        ]);

        return redirect()->route('contacto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saludo $saludo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saludo $saludo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saludo $saludo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saludo $saludo)
    {
        //
    }
}
