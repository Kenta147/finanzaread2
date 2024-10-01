<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiantes::all();
        return response()->json($estudiantes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiantes();
        $estudiante->nombre = $request->nombre;
        $estudiante->edad = $request->edad;
        $estudiante->save();

        return response()->json(["message"=>"Registro Agregado Correctamente !"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiantes::find($id);
        if(!empty($estudiante)){
            return response()->json($estudiante);            
        }
        else
        {
            return response()->json(["message"=>"El registro no está en la BD"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiantes::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->edad = $request->edad;
        $estudiante->save();

        return response()->json(["message"=>"Registro Actualizado Correctamente !"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiantes::find($id);
        $estudiante->delete();
        return response()->json(["message"=>"Registro Eliminado Correctamente !"]);
    }
}
