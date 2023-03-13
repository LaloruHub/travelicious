<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;

class DestinoController extends Controller
{


    public function cambiaSesion(Request $request)
    {
        if (session()->has('filtro')) {
            if (session()->get('filtro') === 'asc') {
                session()->put('filtro', 'desc');
            } else {
                session()->put('filtro', 'asc');
            }
        } else {
            session(['filtro' => 'asc']);
        }
        return $this->index();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!session()->has('filtro')){
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
