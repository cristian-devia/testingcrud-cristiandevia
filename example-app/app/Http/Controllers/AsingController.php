<?php

namespace App\Http\Controllers;

use App\Models\Asing;
use Illuminate\Http\Request;

/**
 * Class AsingController
 * @package App\Http\Controllers
 */
class AsingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asings = Asing::paginate();

        return view('asing.index', compact('asings'))
            ->with('i', (request()->input('page', 1) - 1) * $asings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asing = new Asing();
        return view('asing.create', compact('asing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asing::$rules);

        $asing = Asing::create($request->all());

        return redirect()->route('asings.index')
            ->with('success', 'Asing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asing = Asing::find($id);

        return view('asing.show', compact('asing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asing = Asing::find($id);

        return view('asing.edit', compact('asing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asing $asing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asing $asing)
    {
        request()->validate(Asing::$rules);

        $asing->update($request->all());

        return redirect()->route('asings.index')
            ->with('success', 'Asing updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asing = Asing::find($id)->delete();

        return redirect()->route('asings.index')
            ->with('success', 'Asing deleted successfully');
    }
}
