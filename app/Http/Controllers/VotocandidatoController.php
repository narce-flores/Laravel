<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voto;
use App\Models\Candidato;
use App\Models\Votocandidato;

use Illuminate\Support\Facades\DB;

class VotocandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votocandidatos = DB::table('votocandidato')
            ->join('voto', 'votocandidato.voto_id', '=', 'voto.id')
            ->join('candidato', 'votocandidato.candidato_id', '=', 'candidato.id')
            ->select('votocandidato.voto_id', 'voto.eleccion_id as voto', 'candidato.nombrecompleto as candidato', 'votos')
            ->get();

        return view("votocandidato/list",
        compact("votocandidatos"));


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
        $request->validate([
            'voto_id' => 'required|integer',
            'candidato_id' => 'required|integer',
            'votos' => 'required|int'
        ]);
        
        $data = [
            "voto_id" => $request->voto_id,
            "candidato_id" => $request->candidato_id ,
            "votos" => $request->votos
        ];
        
        Votocandidato::create($data);
        return redirect('votocandidato')->with('success',
            ' guardado satisfactoriamente ...');

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
        $votos = Voto::all();
        $candidatos = Candidato::all();
        $votocandidato = Votocandidato::find($id);

        return view("votocandidato/edit", 
        compact("votocandidato","votos","candidatos"));

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
        $request->validate([
            'candidato_id' => 'required|integer',
            'voto_id'=>'required|integer',
            'votos' => 'required|int'
        ]);
        
        $data = [
            "candidato_id" => $request->candidato_id ,
            "voto_id" => $request->voto_id,
            "votos" => $request->votos
        ];
        
        Votocandidato::find($id)->update($data);
        return redirect('votocandidato')->with('success',
            ' Cambio realizado ...');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Votocandidato::find($id)->delete();
        return redirect('votocandidato');
    }
}