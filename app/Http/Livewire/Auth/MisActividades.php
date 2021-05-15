<?php

namespace App\Http\Livewire\Auth;

use App\Models\Actividade;
use App\Models\ActividadInscripcione;
use Livewire\Component;

class MisActividades extends Component
{
    public $count = 4;
    public $totalInscripciones = 0;
    public $clientesIdProtected;
    public function render()
    {
        $actividadesId = array();
        $clientesId = array();

        foreach (auth()->user()->cliente()->actividadInscripciones as $inscripcion) {
            if (
                $inscripcion->actividad->id != 10
                && $inscripcion->actividad->id != 11
                && $inscripcion->actividad->id != 12
                && $inscripcion->actividad->id != 13
            )
            {
                array_push($actividadesId, $inscripcion->actividad->id);
                array_push($clientesId, auth()->user()->cliente()->id);
               
            }
           
        }

        foreach (auth()->user()->cliente()->familiares() as $familiar) {
            foreach ($familiar->actividadInscripciones as $inscripcion) {
                if (
                    $inscripcion->actividad->id != 10
                    && $inscripcion->actividad->id != 11
                    && $inscripcion->actividad->id != 12
                    && $inscripcion->actividad->id != 13
                ) {
                    array_push($actividadesId, $inscripcion->actividad->id);
                    array_push($clientesId, $familiar->id);
                }
            }
        }
        $this->totalInscripciones =   $inscripciones = ActividadInscripcione::whereIn('actividad_id', $actividadesId)
        ->whereIn('cliente_id', $clientesId)
        ->orderBy('id', 'DESC')
        ->get();

        $inscripciones = ActividadInscripcione::whereIn('actividad_id', $actividadesId)
        ->whereIn('cliente_id', $clientesId)
        ->orderBy('id', 'DESC')
        ->limit($this->count)
        ->get();

        $this->clientesIdProtected = $clientesId;

        return view('livewire.auth.mis-actividades', compact('inscripciones'));
    }

    public function load(){
        $this->count += 4;
    }

    public function cancel($id){
        $inscripcion = ActividadInscripcione::where('id', $id)->first();
        if ($inscripcion){
            if (in_array($inscripcion->cliente_id, $this->clientesIdProtected)){
                $inscripcion->delete();

                $this->dispatchBrowserEvent(
                    'alert',
                    [
                        'message' => translate('cancelar_inscripcion'),
                        'id' => $inscripcion->id
                    ]
                );
            }
        }
    }
}
