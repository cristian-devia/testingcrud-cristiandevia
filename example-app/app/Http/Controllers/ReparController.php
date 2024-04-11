<?php

namespace App\Http\Controllers;

use App\Models\Repar;
use Illuminate\Http\Request;

/**
 * Class ReparController
 * @package App\Http\Controllers
 */
class ReparController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repars = Repar::paginate();

        return view('repar.index', compact('repars'))
            ->with('i', (request()->input('page', 1) - 1) * $repars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repar = new Repar();
        return view('repar.create', compact('repar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Repar::$rules);

        $repar = Repar::create($request->all());

        return redirect()->route('repars.index')
            ->with('success', 'Repar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repar = Repar::find($id);

        return view('repar.show', compact('repar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repar = Repar::find($id);

        return view('repar.edit', compact('repar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Repar $repar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repar $repar)
    {
        request()->validate(Repar::$rules);

        $repar->update($request->all());

        return redirect()->route('repars.index')
            ->with('success', 'Repar updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $repar = Repar::find($id)->delete();

        return redirect()->route('repars.index')
            ->with('success', 'Repar deleted successfully');
    }
}
