<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use App\Models\ActividadInscripcione;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class InscripcionesController extends Controller
{
    public function store(Request $request)
    {
        $actividad = Actividade::where('slug',  $request->actividad)
        ->where('activo', 1)
        ->where('visible', 1)
        ->first();

        if ($actividad){
            $cliente = Client::where('id', $request->cliente)
            ->where('user_id', auth()->user()->id)
            ->first();
            if ($cliente){
                $inscripcion = ActividadInscripcione::where('cliente_id', $cliente->id)
                ->where('actividad_id', $actividad->id)
                ->first();

                if (!$inscripcion){
                    $opciones = array();
                    if (isset($request->answerGroup1)){
                        $titulo = null;
                        $values = array();
                        foreach ($request->answerGroup1 as $opcionesG1){
                            $splitOption = explode("@", $opcionesG1);
                            $key = $splitOption[0];
                            $value = $splitOption[1];
                            
                            if ($titulo == null){
                                $titulo = $key;
                            }
                            else if ($titulo != $key){
                                $opciones[$titulo] = $values;
                                $values = array();
                                $titulo = $key;
                            }
                            array_push($values, $value);
                        }
                        $opciones[$titulo] = $values;
                    }
                    if (isset($request->extraGroup)){
                        $titulo = 'grupo-extras';
                        $values = array();
                        foreach ($request->extraGroup as $extraGroupOption){
                            array_push($values, $extraGroupOption);
                        }
                        $opciones[$titulo] = $values;
                    }
                    if (isset($request->answerGroup2)){
                        $titulo = 'extra-grupos';
                        $opcionesGrupo = array();
                       
                        foreach ($request->answerGroup2 as $key => $opcionesG2){
                            $opcionesGrupo[$key] = $opcionesG2;
                        }
                        $opciones[$titulo] = $opcionesGrupo;
                    }
                    if (isset($request->answerGroup3)){
                        $titulo = 'extras';
                        $opcionesGrupo = array();
                        foreach ($request->answerGroup3 as $opcionesG3){
                            array_push($opcionesGrupo, $opcionesG3);
                        }
                        $opciones[$titulo] = $opcionesGrupo;
                    }

                    $newInscripcion = new ActividadInscripcione();
                    $newInscripcion->cliente_id = $cliente->id;
                    $newInscripcion->actividad_id = $actividad->id;
                    $newInscripcion->opciones = json_encode($opciones);
                    $newInscripcion->save();

                    return response()->json([
                    ], Response::HTTP_CREATED);
                }
            }
        }
    }

    public function loadForm(Request $request)
    {
        $actividad = Actividade::where('slug', $request->slug)->where('activo', 1)
            ->where('visible', 1)
            ->first();

        if ($actividad) {
            $error = null;
            $cliente = null;

            if ($actividad->actividadTipo->id == 3) {
                //Adultos
                if (auth()->user()->cliente()->inscritoActividad($actividad->id)) {
                    $error = "error_inscrito";
                }
                else{
                    $cliente = auth()->user()->cliente();
                }
            } else if ($actividad->actividadTipo->id == 2) {    
                //Infantil
                if (isset($request->familiar)) {
                    $familiares = auth()->user()->cliente()->familiares();
                    $cliente = null;
                    foreach ($familiares as $familiar){
                        if ($familiar->id == $request->familiar){
                            $cliente = $familiar;
                        }
                    }
                    if (!$cliente){
                        $error = "error";
                    }
                } else {
                    $familiares = auth()->user()->cliente()->familiares();
                    $familiaresNoInscritos = array();
                    if (count($familiares) > 0) {
                        foreach ($familiares as $familiar) {
                            if (!$familiar->inscritoActividad($actividad->id)) {
                                array_push($familiaresNoInscritos, $familiar);
                            }
                        }
                        if (count($familiaresNoInscritos) > 1) {
                            $error = "error_multiples_familiares";
                        }
                        else {
                            if (count($familiaresNoInscritos) == 0){
                                $error = "error_0_options";
                            }
                            else{
                                $cliente = $familiaresNoInscritos[0];
                            }
                        }
                    } else {
                        $error = "error_not_found_familiares";
                    }
                }
            } else if ($actividad->actividadTipo->id == 1) {
                //Sin preferencia

            }
            return response()->json([
                'content' => view('components.opciones-formulario', compact('actividad', 'error', 'cliente'))->render(),
            ], Response::HTTP_CREATED);
        }
    }
   
    public function aceptarPago(Request $request){
        
        ActividadInscripcione::where('cliente_id', $request->cliente)
        ->where('actividad_id', $request->actividad)
        ->update([
            'pagado' => 1
        ]);

        return response()->json([
        ], Response::HTTP_CREATED);
    }

    public function cancelarPago(Request $request){
        
        ActividadInscripcione::where('cliente_id', $request->cliente)
        ->where('actividad_id', $request->actividad)
        ->update([
            'pagado' => 0
        ]);

        return response()->json([
        ], Response::HTTP_CREATED);
    }
}
