<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuzonPostRequest;
use App\Buzon;


class BuzonController extends Controller
{

    public function index()
    {   $this->authorize('haveaccess','buzons.index');
        $buzons = Buzon::all();
        return view('buzons.index', compact('buzons'));
    }

    public function show(Request $request, Buzon $buzon)
    {   $this->authorize('haveaccess','buzons.show');
        return view('buzons.show', compact('buzon'));
    }

    public function create()
    {   $this->authorize('haveaccess','buzons.create');
        return view('buzons.create');
    }

    public function store(BuzonPostRequest $request)
    {   $this->authorize('haveaccess','buzons.create');
        $data = $request->validated();
        $buzon = Buzon::create($data);
        return redirect()->route('buzons.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Buzon $buzon)
    {   $this->authorize('haveaccess','buzons.edit');
        return view('buzons.edit', compact('buzon'));
    }

    public function update(BuzonPostRequest $request, Buzon $buzon)
    {
        $data = $request->validated();
        $buzon->fill($data);
        $buzon->save();
        return redirect()->route('buzons.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Buzon $buzon)
    {   $this->authorize('haveaccess','buzons.destroy');
        $buzon->delete();
        return redirect()->route('buzons.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
