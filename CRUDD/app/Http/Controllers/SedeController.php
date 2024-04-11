<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

/**
 * Class SedeController
 * @package App\Http\Controllers
 */
class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sedes = Sede::query();
    
        if ($request->has('nombre_sede')) {
            $sedes->where('nombre_sede', 'like', '%' . $request->input('nombre_sede') . '%');
        }
    
        $sedes = $sedes->paginate(10);
    
        return view('sede.index', compact('sedes'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = new Sede();
        return view('sede.create', compact('sede'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sede::$rules);

        $sede = Sede::create($request->all());

        return redirect()->route('sedes.index')
            ->with('success', 'Sede created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::find($id);

        return view('sede.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);

        return view('sede.edit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sede $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sede $sede)
    {
        request()->validate(Sede::$rules);

        $sede->update($request->all());

        return redirect()->route('sedes.index')
            ->with('success', 'Sede updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sede = Sede::find($id)->delete();

        return redirect()->route('sedes.index')
            ->with('success', 'Sede deleted successfully');
    }
}
