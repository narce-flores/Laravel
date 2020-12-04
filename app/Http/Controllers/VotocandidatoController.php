<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voto;
use App\Models\Candidato;
use App\Models\Votocandidato;



class VotocandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votos = DB::table('votocandidato')
            ->join('voto', 'votocandidato.voto_id', '=', 'voto.id')
            ->join('candidato', 'votocandidato.candidato_id', '=', 'candidato.id')
            ->select('voto.periodo as eleccion', 'candidato.ubicacion as casilla', 'votos')
            ->get();

        return view("votocandidato/list",
        compact("votoscandidato"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
         $votos = Voto::all();
         $candidatos = Candidato::all();
       

        return view("votocandidato/create", 
        compact("votos","candidatos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
