<?php

namespace App\Http\Controllers;

use App\Models\Termino;
use Illuminate\Http\Request;

/**
 * Class TerminoController
 * @package App\Http\Controllers
 */
class TerminoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terminos = Termino::paginate();

        return view('termino.index', compact('terminos'))
            ->with('i', (request()->input('page', 1) - 1) * $terminos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $termino = new Termino();
        return view('termino.create', compact('termino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Termino::$rules);

        $termino = Termino::create($request->all());

        return redirect()->route('terminos.index')
            ->with('success', 'Termino created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $termino = Termino::find($id);

        return view('termino.show', compact('termino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $termino = Termino::find($id);

        return view('termino.edit', compact('termino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Termino $termino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termino $termino)
    {
        request()->validate(Termino::$rules);

        $termino->update($request->all());

        return redirect()->route('terminos.index')
            ->with('success', 'Termino updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $termino = Termino::find($id)->delete();

        return redirect()->route('terminos.index')
            ->with('success', 'Termino deleted successfully');
    }
}
