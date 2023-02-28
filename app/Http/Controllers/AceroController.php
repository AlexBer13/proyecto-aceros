<?php

namespace App\Http\Controllers;

use App\Models\Acero;
use Illuminate\Http\Request;

class AceroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aceros = Acero::all();
        return view('aceros.index-aceros', compact('aceros'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
       return view('/aceros/formulario');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_de_calibre' => ['required','integer'],
            'costos' => ['required', 'integer'],
            'cantidad' => ['required', 'integer']
        ]);

        $aceros = new Acero();
        $aceros->tipo_de_calibre = $request->tipo_de_calibre;
        $aceros->costos = $request->costos;
        $aceros->cantidad = $request->cantidad;
        $aceros->save();
        return AceroController::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Acero $acero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acero $acero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acero $acero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acero $acero)
    {
        //
    }
}
