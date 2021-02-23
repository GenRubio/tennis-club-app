<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AltaEmpleado extends Component
{
    public $tipo = "none";
    public $nombre;
    public $apellido;
    public $sexe;
    public $fNacimiento;
    public $nif;
    public $paisOrigen;
    public $estadoCivil;
    public $direccion;
    public $codigoPostal;
    public $localidad;
    public $provincia;
    public $pais;
    public $email;
    public $telefonoMovil;
    public $telefonoFijo;
    public $emailWeb;
    public $passwordWeb;


    public function render()
    {
        return view('livewire.alta-empleado');
    }
    public function add()
    {
        

        $this->tipo = "none";
        $this->nombre = "";
        $this->apellido = "";
        $this->sexe = "";
        $this->fNacimiento = "";
        $this->nif = "";
        $this->paisOrigen = "";
        $this->estadoCivil = "";
        $this->direccion = "";
        $this->codigoPostal = "";
        $this->localidad = "";
        $this->provincia = "";
        $this->pais = "";
        $this->email = "";
        $this->telefonoMovil = "";
        $this->telefonoFijo = "";
        $this->emailWeb = "";
        $this->passwordWeb = "";
    }
}
