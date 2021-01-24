<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Voto;
use App\Models\Votocandidato;
use Barryvdh\DomPDF\Facade as PDF; //--- Se agregó esta línea
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
        $sql="  SELECT v.id as voto, c.nombrecompleto as candidato,  vc.votos
            FROM votocandidato vc 
            INNER JOIN voto v ON vc.voto_id = v.id
            INNER JOIN candidato c ON vc.candidato_id = c.id
            ORDER BY voto"; 

        $votocandidatos = DB::select($sql);
        return view("votocandidato/list",compact("votocandidatos")); 

        /*$votocandidatos = DB::table('votocandidato')
            ->join('voto', 'votocandidato.voto_id', '=', 'voto.id')
            ->join('candidato', 'votocandidato.candidato_id', '=', 'candidato.id')
            ->select('votocandidato.voto_id', 'voto.eleccion_id as voto', 'candidato.nombrecompleto as candidato', 'votos')
            ->get();

        return view("votocandidato/list",
        compact("votocandidatos"));*/
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

    public function generatepdf()
    {
        $sql="  SELECT v.id as voto, c.nombrecompleto as candidato,  vc.votos
            FROM votocandidato vc 
            INNER JOIN voto v ON vc.voto_id = v.id
            INNER JOIN candidato c ON vc.candidato_id = c.id
            ORDER BY voto"; 

        /*$votocandidatos = DB::select($sql);
        $pdf = PDF::loadView('votocandidato/vistavotocand', ['votocandidatos'=>$votocandidatos]);
        return $pdf->stream('archivo.pdf');*/

        /*$votocandidatos = DB::select($sql);
        $pdf = PDF::loadView('votocandidato/list', ['votocandidatos'=>$votocandidatos]);
        return $pdf->download('archivo.pdf');*/

        $html = "<div style='text-align:center;'><h1>PDF generado desde etiquetas html</h1>
        <br><h3>&copy;Narce.dev</h3> </div>";
        $pdf = PDF::loadHTML($html);
        return $pdf->download('archivo.pdf');
    }

    public function generatechart()
    {
        $sql ="SELECT votos,candidato_id FROM votocandidato";
        $votocandidatos = DB::select($sql);
        return view("votocandidato/chart",['votocandidatos'=>$votocandidatos]);
    }
}
