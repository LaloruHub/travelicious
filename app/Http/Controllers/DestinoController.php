<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
use App\Models\Visitado;

class DestinoController extends Controller
{
    public function marcarComoVisitado(Request $request)
    {
        $id = $request->ID;
        dd($request);
        // Eliminar el registro de la tabla "Destinos"
        Destino::where('id', $id)->delete();

        // Agregar un nuevo registro a la tabla "Visitados"
        Visitado::create([
            'ID' => $id,
            'NOM' => $request->input('nom'),
            'LOC' => $request->input('loc'),
            'WEB' => $request->input('web'),
            'HOT_APAR' => $request->input('hot_apar'),
            'PRE' => $request->input('pre'),
            'DIN_GASTADO' => $request->input('pre'),
            'IMG' => $request->input('img'),
            'NOTES' => $request->input('notes'),
            'VAL' => 2,
        ]);

        return redirect()->back();
    }

    public function cambiaFiltro(Request $request)
    {
        
    }

    public function cambiaSesion(Request $request)
    {
        $filtro = session()->get('filtro');
        $nuevoFiltro = $filtro === 'asc' ? 'desc' : 'asc';
        session()->put('filtro', $nuevoFiltro);
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('filtro')) {
            session(['filtro' => 'asc']);
        }
        $filtro = session()->get('filtro');
        $nombre = 'FEC_PREV';
        $destinos = Destino::orderBy($nombre, $filtro)->get();
        return view('destinos', compact('destinos'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
