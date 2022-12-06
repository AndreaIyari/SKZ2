<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function guardar(Request $request)
    {
    $paciente = new Paciente;
    
    $paciente->nombre = $request->input('nombre');
    $paciente->correo = $request->input('correo');
    $paciente->contraseña = $request->input('contraseña');
    $paciente->genero = $request->input('genero');
    $paciente->observaciones = $request->input('observaciones');

    $paciente->save();

    return  redirect('/registrado');
    }

    public function mostrar()
    {
        $pacientes = DB::table('pacientes')->get();
        
        return view('datos', array('pacientes' => ($pacientes)));
    }

    public function editar($id)
    {
        $paciente = Paciente::findOrFail($id);
        
        return view('modificar', array('paciente' => ($paciente)));
    }

    public function actualizar(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        
        $paciente->nombre = $request->input('nombre');
        $paciente->correo = $request->input('correo');
        $paciente->contraseña = $request->input('contraseña');
        $paciente->observaciones = $request->input('observaciones');

        $paciente->update();
        
        return redirect('citas')->with('status', "Datos actualizados correctamente.");
    }

    public function eliminar($id)
    {
        DB::table('pacientes')->whereId($id)->delete();

        return redirect('citas');
    }
}
