<?php

namespace App\Http\Livewire\Auth;

use App\Models\Client;
use App\Models\ClientParientesRelacion;
use Livewire\Component;

class ProfileFamiliaresForm extends Component
{
    public $user;

    public $nombreU;
    public $apellidosU;
    public $dataU;
    public $sexeU;
    public $targetaU;
    public $nacionalidadU;

    public $nombreFAdd;
    public $apellidosFAdd;
    public $dataNacimientoFAdd;
    public $sexeFAdd = -1;
    public $tagetaSanitariaFAdd;
    public $nacionalidadFAdd = "null";

    public function render()
    {
        return view('livewire.auth.profile-familiares-form');
    }

    public function createFormF()
    {
        if ($this->validateFamiliarForm()) {
            $cliente = new Client();
            $cliente->user_id = auth()->user()->id;
            $cliente->first_name = $this->nombreFAdd;
            $cliente->second_name = $this->apellidosFAdd;
            $cliente->sexe = $this->sexeFAdd;
            $cliente->nacionalidad = $this->nacionalidadFAdd;
            $cliente->cat_salut = $this->tagetaSanitariaFAdd;
            $cliente->address = auth()->user()->cliente()->address;
            $cliente->poblacio = auth()->user()->cliente()->poblacio;
            $cliente->cp = auth()->user()->cliente()->cp;
            $cliente->provincia = auth()->user()->cliente()->provincia;
            $cliente->data_naxement = $this->dataNacimientoFAdd;
            $cliente->name_emergenica = auth()->user()->cliente()->full_name;
            $cliente->telefono_1_emergencia =  auth()->user()->cliente()->telefono_1;
            $cliente->telefono_2_emergencia =  auth()->user()->cliente()->telefono_2;

            if (auth()->user()->cliente()->quotaSocio){
                $cliente->quota_socio_id = auth()->user()->cliente()->quotaSocio;
            }
            $cliente->save();

            $relacion1 = new ClientParientesRelacion();
            $relacion1->client_id_1 = auth()->user()->cliente()->id;
            $relacion1->client_id_2 = $cliente->id;
            $relacion1->client_tipo_id = 1;
            $relacion1->save();

            $relacion2 = new ClientParientesRelacion();
            $relacion2->client_id_1 = $cliente->id;
            $relacion2->client_id_2 = auth()->user()->cliente()->id;
            $relacion2->client_tipo_id = 3;
            $relacion2->save();

            $this->resetAddform();

            $this->dispatchBrowserEvent(
                'alertFamiliar',
                ['message' => 'Nuevo familiar se ha añadido correctamente.']
            );
        }
    }

    private function resetAddform(){
        $this->nombreFAdd = "";
        $this->apellidosFAdd = "";
        $this->dataNacimientoFAdd = "";
        $this->sexeFAdd = -1;
        $this->tagetaSanitariaFAdd = "";
        $this->nacionalidadFAdd = "null";
    
    }

    private function validateFamiliarForm()
    {
        $this->validateAgeF();
        $this->validateSexeF();
        $this->validateNameF();
        $this->validateApellidosF();
        $this->validateNacionalidadF();
        $this->validateTargetaSanitariaF();

        if (count($this->getErrorBag()) > 0) {
            return false;
        } else {
            return true;
        }
    }

    private function validateTargetaSanitariaF()
    {

        if ($this->tagetaSanitariaFAdd == "") {
            $this->addError('errorTargetaFAdd', 'El campo targeta es requerido.');
        } else {
            $cliente = Client::where('cat_salut', $this->tagetaSanitariaFAdd)->first();
            if ($cliente) {
                $this->addError('errorTargetaFAdd', 'Este cliente ya esta registrado.');
            }
        }
    }

    private function validateAgeF()
    {
        if ($this->dataNacimientoFAdd) {
            if ($this->calcular_edad($this->dataNacimientoFAdd) > 18 || $this->calcular_edad($this->dataNacimientoFAdd) < 0) {
                $this->addError('errorDataNacimientoFAdd', 'La fecha de nacimiento incorrecta.');
            }
        } else {
            $this->addError('errorDataNacimientoFAdd', 'La fecha de nacimiento incorrecta.');
        }
    }
    private function calcular_edad($fechanacimiento)
    {
        list($ano, $mes, $dia) = explode("-", $fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }
    private function validateSexeF()
    {
        if ($this->sexeFAdd == -1 || $this->sexeFAdd > 1) {
            $this->addError('errorSexeFAdd', 'Porfavor seleciona el sexe.');
        }
    }
    private function validateNameF()
    {
        if ($this->nombreFAdd == "") {
            $this->addError('errorNombreFAdd', 'El campo nombre es requerido.');
        }
    }
    private function validateApellidosF()
    {
        if ($this->apellidosFAdd == "") {
            $this->addError('errorApellidosFAdd', 'El campo apellidos es requerido.');
        }
    }
    private function validateNacionalidadF()
    {
        if ($this->nacionalidadFAdd == "null") {
            $this->addError('errorNacionalidadFAdd', 'El campo nacionalitat es requerido.');
        }
    }

    public function updateForm($id)
    {
        $cliente = Client::where('id', $id)->first();
        if ($cliente) {
            $this->nombreU = $cliente->first_name;
            $this->apellidosU = $cliente->second_name;
            $this->dataU = $cliente->data_naxement;
            $this->sexeU = $cliente->sexe;
            $this->targetaU = $cliente->cat_salut;
        }
    }

    public function updateF($cliente)
    {
        if ($this->validateUpdate()) {
            Client::where('id', $cliente)->update([
                'first_name' => $this->nombreU,
                'second_name' => $this->apellidosU,
                'sexe' => $this->sexeU,
                'data_naxement' => $this->dataU,
                'cat_salut' => $this->targetaU,
            ]);
            $this->dispatchBrowserEvent(
                'alertFamiliar',
                ['message' => 'Los datos del perfil se han actualizado correctamente.']
            );
        }
    }

    private function validateUpdate()
    {
        return true;
    }
}
