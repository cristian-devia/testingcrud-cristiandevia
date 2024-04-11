<?php

namespace App\Http\Controllers;

use App\Models\Garant;
use Illuminate\Http\Request;

/**
 * Class GarantController
 * @package App\Http\Controllers
 */
class GarantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garants = Garant::paginate();

        return view('garant.index', compact('garants'))
            ->with('i', (request()->input('page', 1) - 1) * $garants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $garant = new Garant();
        return view('garant.create', compact('garant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Garant::$rules);

        $garant = Garant::create($request->all());

        return redirect()->route('garants.index')
            ->with('success', 'Garant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garant = Garant::find($id);

        return view('garant.show', compact('garant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $garant = Garant::find($id);

        return view('garant.edit', compact('garant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Garant $garant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garant $garant)
    {
        request()->validate(Garant::$rules);

        $garant->update($request->all());

        return redirect()->route('garants.index')
            ->with('success', 'Garant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $garant = Garant::find($id)->delete();

        return redirect()->route('garants.index')
            ->with('success', 'Garant deleted successfully');
    }
}
