<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PreferenciaPostRequest;
use App\Preferencia;


class PreferenciaController extends Controller
{

    public function index()
    {   $this->authorize('haveaccess','preferencias.index');
        $preferencias = Preferencia::all();
        return view('preferencias.index', compact('preferencias'));
    }

    public function show(Request $request, Preferencia $preferencia)
    {   $this->authorize('haveaccess','preferencias.show');
        return view('preferencias.show', compact('preferencia'));
    }

    public function create()
    {   $this->authorize('haveaccess','preferencias.create');
        return view('preferencias.create');
    }

    public function store(PreferenciaPostRequest $request)
    {   $this->authorize('haveaccess','preferencias.create');
        $data = $request->validated();
        $preferencia = Preferencia::create($data);
        return redirect()->route('preferencias.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Preferencia $preferencia)
    {   $this->authorize('haveaccess','preferencias.edit');
        return view('preferencias.edit', compact('preferencia'));
    }

    public function update(PreferenciaPostRequest $request, Preferencia $preferencia)
    {
        $data = $request->validated();
        $preferencia->fill($data);
        $preferencia->save();
        return redirect()->route('preferencias.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Preferencia $preferencia)
    {   $this->authorize('haveaccess','preferencias.destroy');
        $preferencia->delete();
        return redirect()->route('preferencias.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
