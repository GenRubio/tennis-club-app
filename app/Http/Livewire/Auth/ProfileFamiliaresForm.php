<?php

namespace App\Http\Livewire\Auth;

use App\Models\Client;
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
    
    public function render()
    {
        return view('livewire.auth.profile-familiares-form');
    }

    public function updateForm($id){
        $cliente = Client::where('id', $id)->first();
        if ($cliente){
            $this->nombreU = $cliente->first_name;
            $this->apellidosU = $cliente->second_name;
            $this->dataU = $cliente->data_naxement;
            $this->sexeU = $cliente->sexe;
            $this->targetaU = $cliente->cat_salut;
        }
    }

    public function updateF($cliente){
        if ($this->validateUpdate()){
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

    private function validateUpdate(){
        return true;
    }
}
