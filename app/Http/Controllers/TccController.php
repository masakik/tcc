<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTccRequest;
use App\Http\Requests\UpdateTccRequest;
use App\Models\Tcc;

class TccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        $tccs = Tcc::all();
        // dd($tccs);
        return view('tcc.index', compact('tccs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTccRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTccRequest $request)
    {
        $request->validate([
            'nome'=>'string|required',
            'titulo'=>'nullable|string|max:200'
        ]);
        //
        $tcc = new Tcc;
        $tcc = $request->all();
        $tcc->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tcc  $tcc
     * @return \Illuminate\Http\Response
     */
    public function show(Tcc $tcc)
    {
        return view('tcc.show', compact('tcc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tcc  $tcc
     * @return \Illuminate\Http\Response
     */
    public function edit(Tcc $tcc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTccRequest  $request
     * @param  \App\Models\Tcc  $tcc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTccRequest $request, Tcc $tcc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tcc  $tcc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tcc $tcc)
    {
        //
    }
}
