<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

use Barryvdh\DomPDF\Facade as PDF;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        return view('rol/list', compact('roles'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
        'descripcion' => 'required|max:100',
        ]);
        $rol = Rol::create($validacion);
        return redirect('rol')->with('success',
        $rol->descripcion . ' guardado satisfactoriamente ...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::find($id);
        return view('rol/edit',
        compact('rol'));
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
        $validacion = $request->validate([
         'descripcion' => 'required|max:100',
        ]);
        Rol::whereId($id)->update($validacion);
        return redirect('rol')
        ->with('success', 'Actualizado correctamente...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return redirect('rol');
    }

    public function generatepdf()
    {

        $roles = Rol::all();
        $pdf = PDF::loadView('rol/list', ['roles'=>$roles]);
        return $pdf->download('archivo.pdf');

        /*$html = "<div style='text-align:center;'><h1>PDF generado desde etiquetas html</h1>
        <br><h3>&copy;Narce.dev</h3> </div>";
        $pdf = PDF::loadHTML($html);
        return $pdf->download('archivo.pdf');*/

        /*$roles = Rol::all();
        return PDF::loadView('candidato/list', ['candidatos'=>$candidatos])
            ->stream('archivo.pdf');*/

    }
}
