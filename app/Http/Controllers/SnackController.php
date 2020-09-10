<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SnackPostRequest;
use App\Snack;


class SnackController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {   $this->authorize('haveaccess','snacks.index');
        $snacks = Snack::all();
        return view('snacks.index', compact('snacks'));
    }

    public function show(Request $request, Snack $snack)
    {   $this->authorize('haveaccess','snacks.show');
        return view('snacks.show', compact('snack'));
    }

    public function create()
    {   $this->authorize('haveaccess','snacks.create');
        return view('snacks.create');
    }

    public function store(SnackPostRequest $request)
    {   $this->authorize('haveaccess','snacks.create');
        $data = $request->validated();
        $snack = Snack::create($data);
        return redirect()->route('snacks.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Snack $snack)
    {   $this->authorize('haveaccess','snacks.edit');
        return view('snacks.edit', compact('snack'));
    }

    public function update(SnackPostRequest $request, Snack $snack)
    {
        $data = $request->validated();
        $snack->fill($data);
        $snack->save();
        return redirect()->route('snacks.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Snack $snack)
    {   $this->authorize('haveaccess','snacks.destroy');
        $snack->delete();
        return redirect()->route('snacks.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
