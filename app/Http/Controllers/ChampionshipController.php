<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $championships = championship::all()->where('user_id',Auth::user()->id);
        return view('championship.index', ['championships' => $championships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('championship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $championship = Championship::create($request->all());
        $championships = championship::all()->where('user_id',Auth::user()->id);
        Alert::success('Sucesso', 'Seu campeonato foi criado e está pronto para ser configurado');
        return view('Championship.index', ['championships' => $championships]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function show(Championship $championship)
    {
        return view('championship.show', [
            'championship' => $championship,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function edit(Championship $championship)
    {
        Alert::success('sucesso', 'Entrei no editar');
        return __('Entrei no editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Championship $championship)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Championship $championship)
    {
        $championship->delete();
        Alert::success('Excluído', 'Seu campeonato foi excluído com sucesso');
        $championships = Championship::all()->where('user_id',Auth::user()->id);
        return view('championship.index', ['championships' => $championships]);


    }
}
