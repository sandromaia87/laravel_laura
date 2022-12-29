<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Http\Request;
use App\Models\date_championship;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class Date_championshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $champs = Championship::all()->where('id', $_GET['id'])->first();
        if($champs->user_id == Auth::user()->id){
            return  view('date_championship.create', ['championship' => $champs]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacorreta = $request->data.' '.$request->hora;
        $champs = new Date_championship([
            'idchamps'  => $request->idchamps,
            'date'      => $datacorreta,
        ]);
        $champs->save();

        Alert::success('Sucesso', 'Data vinculada com sucesso');
        
        $championship = championship::all()->where('id',$request->idchamps)->first();
        $date_champs = $championship->datechamps()->get();
        
        return Redirect::route('championship.show', [ 
            'championship' => $championship,
            'datechampionships' => $date_champs,
         ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\date_championship  $date_championship
     * @return \Illuminate\Http\Response
     */
    public function show(date_championship $date_championship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\date_championship  $date_championship
     * @return \Illuminate\Http\Response
     */
    public function edit(date_championship $date_championship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\date_championship  $date_championship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, date_championship $date_championship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\date_championship  $date_championship
     * @return \Illuminate\Http\Response
     */
    public function destroy(date_championship $date_championship)
    {
        $championship = championship::all()->where('id',$date_championship->idchamps)->first();
        $date_champs = $championship->datechamps()->get();

        $date_championship->delete();

        return Redirect::route('championship.show', [ 
            'championship' => $championship,
            'datechampionships' => $date_champs,
         ]);

        
        
    }
}
