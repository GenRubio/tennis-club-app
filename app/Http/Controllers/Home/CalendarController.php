<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;

class CalendarController extends Controller
{
    public function index()
    {
        $actividades = Actividade::where('activo', 1)
            ->where('visible', 1)
            ->get();

        $data = array();
        foreach ($actividades as $actividad) {
            foreach ($actividad->fechasCalendario as $fecha) {
                $fechaInicio = strtotime($fecha->data_inicio);
                $fechaFinal = strtotime($fecha->data_final ? $fecha->data_final : '2030-02-12');

                for ($i = $fechaInicio; $i <= $fechaFinal; $i += 86400) {
                    $dia = date('N', $i);
                    foreach ($fecha->horarios as $horario) {
                        if ($horario->dia == $dia) {
                            $data[] = array(
                                'id'   => $horario->id,
                                'title'   => $fecha->actividad->titulo,
                                'start'   => date('Y-m-d', $i),
                                'end'   => date('Y-m-d', $i),
                                'extendedProps' => array(
                                    'content' => view('components.calendar-modal', compact('fecha'))->render(),
                                )
                            );
                        }
                    }
                }
            }
        }
        return json_encode($data);
    }
}
