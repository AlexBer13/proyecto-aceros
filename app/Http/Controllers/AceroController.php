<?php

namespace App\Http\Controllers;

use App\Models\Acero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class AceroController extends Controller
{
   // public function _construct()  
    //{
     //   $this->middleware('auth')->except('index');
    //}
    public function index()
    {
        $aceros = Acero::all();
        
        return view('aceros.index-aceros', compact('aceros'));
    }

    public function pdf(){
        $aceros = Acero::all();
        $pdf = Pdf::loadView('aceros.pdf',  compact('aceros'));
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        

        if (Auth::user()->cannot('create', Acero::class)) {

            abort(403);
   
    }
       return view('/aceros/create-aceros');
       

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'tipo_de_calibre' => ['required', 'string' ],
            'costos' => ['required', 'integer' ],
            'cantidad' => ['required', 'integer']
        ]);
        
        $acero = new Acero();
        $acero->tipo_de_calibre = $request -> tipo_de_calibre;
        $acero->costos = $request -> costos; 
        $acero->cantidad = $request -> cantidad;
        $acero->save();
        return redirect()->route('aceros.index', $acero)->with('acero', 'agregado');
    }
    /**
     * Display the specified resource.
     */
    public function show(Acero $acero)
    {
        return view('aceros.show-acero', compact('acero'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acero $acero)
    {
        return view('aceros.edit-acero', compact('acero'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acero $acero)
    {
        
        Acero::where('id', $acero->id)->update($request->except('_token','_method'));
        //$request->validate([
          //  'tipo_de_calibre' => ['required','integer'],
            //'costos' => ['required', 'integer'],
            //'cantidad' => ['required', 'integer']
        //]);

        //$acero->tipo_de_calibre = $request->tipo_de_calibre;
        //$acero->costos = $request->costos;
        //$acero->cantidad = $request->cantidad;
        //$acero->save();
        return redirect()->route('aceros.index', $acero)->with('acero', 'editar');
        
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acero $acero)
    {
        $acero->delete();
        return redirect()->route('aceros.index')->with('acero', 'eliminado');
    }


    public function consulta(Request $request)
    {
      // Obtener los datos de la consulta
      $datos = Acero::where('tipo_de_calibre', $request->tipo_de_calibre)->get();
      // Devolver la respuesta en formato JSON
      return response()->json($datos);
    }
}
