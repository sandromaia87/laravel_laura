<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Http\Request;
use App\Models\Date_championship;
use App\Models\User;
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
        $champs = championship::searchchampsuser();

        return view('championship.index', ['championships' =>  $champs]);
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
        $novochamps = Championship::create($request->all());

        if ($novochamps) {
            Alert::success('Sucesso', 'Seu campeonato foi criado e está pronto para ser configurado');
        } else {
            Alert::error('Ops', 'Algum erro ocorreu na criação do seu campeonato');
        }


        $championships = championship::searchchampsuser();
        return view('Championship.index', [
            'championships' => $championships
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function show(Championship $championship)
    {
        if ($championship) {
            $date_champs = Date_championship::champsdatecrescent($championship->id);
            return view('championship.show', [
                'championship' => $championship,
                'datechampionships' => $date_champs,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function edit(Championship $championship)
    {
        return view('championship.edit', [
            'championship' => $championship,
        ]);
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
        if ($request->validate([
            'name' => 'required',
            ])) {
            Alert::warning('Atenção', 'Preencha todos os campos');
        }

        $championship->fill($request->post())->save();

        Alert::success('Sucesso', 'Seu campeonato foi atualizado');

        $date_champs = Date_championship::champsdatecrescent($championship->id);
        return view('championship.show', [
            'championship' => $championship,
            'datechampionships' => $date_champs,
        ]);
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
        $championships = Championship::searchchampsuser();
        return view('championship.index', ['championships' => $championships]);
    }
}
