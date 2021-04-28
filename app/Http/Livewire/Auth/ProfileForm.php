<?php

namespace App\Http\Livewire\Auth;

use App\Models\Client;
use App\Models\User;
use Livewire\Component;

class ProfileForm extends Component
{
    public $user;
    public $nombre;
    public $apellidos;
    public $fecha;
    public $mobil;
    public $fijo;
    public $nombreEmergencia;
    public $numero1Emergencia;
    public $numero2Emergencia;

    public function render()
    {
        return view('livewire.auth.profile-form');
    }

    public function mount()
    {
        $this->nombre = $this->user->cliente()->first_name;
        $this->apellidos = $this->user->cliente()->second_name;
        $this->fecha = $this->user->cliente()->data_naxement;
        $this->mobil = $this->user->cliente()->telefono_1;
        $this->fijo = $this->user->cliente()->telefono_2;
        $this->nombreEmergencia = $this->user->cliente()->name_emergenica;
        $this->numero1Emergencia = $this->user->cliente()->telefono_1_emergencia;
        $this->numero2Emergencia = $this->user->cliente()->telefono_2_emergencia;
    }

    public function save()
    {
        if ($this->validations()) {
            Client::where('id', $this->user->cliente()->id)->update([
                'first_name' => $this->nombre,
                'second_name' => $this->apellidos,
                'data_naxement' => $this->fecha,
                'telefono_1' => $this->mobil,
                'telefono_2' => $this->fijo,
                'name_emergenica' => $this->nombreEmergencia,
                'telefono_1_emergencia' => $this->numero1Emergencia,
                'telefono_2_emergencia' => $this->numero2Emergencia,
            ]);

            $this->dispatchBrowserEvent(
                'alert',
                ['message' => 'Los datos del perfil se han actualizado correctamente.']
            );
        }
    }

    private function validations()
    {
        return true;
    }
}
