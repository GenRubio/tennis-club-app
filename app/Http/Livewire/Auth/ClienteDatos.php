<?php

namespace App\Http\Livewire\Auth;

use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ClienteDatos extends Component
{
    public $progress = 4;

    //Personals
    public $nombre;
    public $apellidos;
    public $sexe = -1;
    public $tipoIdentificador = 1;
    public $identificador;
    public $nacionalidad = "null";
    public $tagetaSanitaria;
    public $dataNacimiento;
    public $cuentaBancaria;
    public $telefonoContacto1;
    public $telefonoContacto2;

    //Adresa
    public $codigoPostal;
    public $direccion;
    public $poblacion;
    public $provincia;

    //Emergencia
    public $nombreEmergencia;
    public $telefonoEmergencia;
    public $mobilEmergencia;

    //Familiares
    public $familiares = array();
    public $countId = 0;
    public $familiaresForm = false;

    public $nombreF;
    public $apellidosF;
    public $tagetaSanitariaF;
    public $nacionalidadF;
    public $sexeF = -1;
    public $dataNacimientoF;



    public function render()
    {
        return view('livewire.auth.cliente-datos');
    }

    public function siguente()
    {
        if ($this->progress == 1) {
            if ($this->validatePersonalsForm()) {
                $this->progress += 1;
            }
        } else if ($this->progress == 2) {
            if ($this->validateAdressForm()) {
                $this->progress += 1;
            }
        } else if ($this->progress == 3) {
            $this->progress += 1;
        }
        else if ($this->progress == 4) {
            //Save data
        }
    }

    public function atras()
    {
        $this->progress -= 1;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function addFormFamiliar(){
        $this->familiaresForm = true;
    }

    public function addFamiliar(){
        if ($this->validateFamiliarForm()){
            //$this->countId += 1;

        
            $this->familiaresForm = false;
        }
    }


    public function cancelFormFamiliar(){
        $this->familiaresForm = false;

        $this->nombreF = "";
        $this->apellidosF = "";
        $this->tagetaSanitariaF = "";
        $this->nacionalidadF = "";
        $this->sexeF = -1;
        $this->dataNacimientoF = "";
    }

    private function validateFamiliarForm(){
        return true;
    }

    private function validateAdressForm()
    {
        $this->validateCodigoPostal();
        $this->validateDireccion();
        $this->validatePoblacion();
        $this->validateProvincia();

        if (count($this->getErrorBag()) > 0) {
            return false;
        } else {
            return true;
        }
    }

    private function validatePersonalsForm()
    {
        $this->validateAge();
        $this->validateSexe();
        $this->validateName();
        $this->validateApellidos();
        $this->validateNacionalidad();
        $this->validateMobil();
        $this->validateIdentificador();

        if (count($this->getErrorBag()) > 0) {
            return false;
        } else {
            return true;
        }
    }

    ///Validators

    ///Adress Form rules

    private function validateCodigoPostal()
    {
        if ($this->codigoPostal == "") {
            $this->addError('errorCodigoPostal', 'Codigo postal incorrecto.');
        }
    }
    private function validateDireccion()
    {
        if ($this->direccion == "") {
            $this->addError('errorDireccion', 'Direccion incorrecta.');
        }
    }
    private function validatePoblacion()
    {
        if ($this->poblacion == "") {
            $this->addError('errorPoblacion', 'Poblacion incorrecta.');
        }
    }
    private function validateProvincia()
    {
        if ($this->provincia == "") {
            $this->addError('errorProvincia', 'Provincia incorrecta.');
        }
    }
    ///Personals Form rules
    private function validateAge()
    {
        $bday = new DateTime($this->dataNacimiento);
        $bday->add(new DateInterval("P18Y"));
        if ($bday > new DateTime()) {
            $this->addError('errorDataNacimiento', 'La fecha de nacimiento incorrecta.');
        }
    }
    private function validateSexe()
    {
        if ($this->sexe == -1 || $this->sexe > 1) {
            $this->addError('errorSexe', 'Porfavor seleciona el sexe.');
        }
    }
    private function validateName()
    {
        if ($this->nombre == "") {
            $this->addError('errorNombre', 'El campo nombre es requerido.');
        }
    }
    private function validateApellidos()
    {
        if ($this->apellidos == "") {
            $this->addError('errorApellidos', 'El campo apellidos es requerido.');
        }
    }
    private function validateNacionalidad()
    {
        if ($this->nacionalidad == "null") {
            $this->addError('errorNacionalidad', 'El campo nacionalitat es requerido.');
        }
    }
    private function validateMobil()
    {
        if ($this->telefonoContacto1 == "") {
            $this->addError('errorMobil', 'El campo mòbil es requerido.');
        }
    }
    private function validateIdentificador()
    {
        if ($this->tipoIdentificador == 1) { //DNI
            if (!$this->validateNif($this->identificador)) {
                $this->addError('errorIdentificador', 'El campo DNI es incorrecto.');
            }
        } else if ($this->tipoIdentificador == 2) { //CIF
            if (!$this->cif_validation($this->identificador)) {
                $this->addError('errorIdentificador', 'El campo CIF es incorrecto.');
            }
        } else if ($this->tipoIdentificador == 3) { //Passaport
            if ($this->tipoIdentificador == "") {
                $this->addError('errorIdentificador', 'El campo Passaport es incorrecto.');
            }
        } else if ($this->tipoIdentificador == 4) { //NIE
            if (!$this->validateNie($this->identificador)) {
                $this->addError('errorIdentificador', 'El campo NIE es incorrecto.');
            }
        }
    }
    private function cif_validation($cif)
    {
        $cif = strtoupper($cif);
        if (preg_match('~(^[XYZ\d]\d{7})([TRWAGMYFPDXBNJZSQVHLCKE]$)~', $cif, $parts)) {
            $control = 'TRWAGMYFPDXBNJZSQVHLCKE';
            $nie = array('X', 'Y', 'Z');
            $parts[1] = str_replace(array_values($nie), array_keys($nie), $parts[1]);
            $cheksum = substr($control, $parts[1] % 23, 1);
            return ($parts[2] == $cheksum);
        } elseif (preg_match('~(^[ABCDEFGHIJKLMUV])(\d{7})(\d$)~', $cif, $parts)) {
            $checksum = 0;
            foreach (str_split($parts[2]) as $pos => $val) {
                $checksum += array_sum(str_split($val * (2 - ($pos % 2))));
            }
            $checksum = ((10 - ($checksum % 10)) % 10);
            return ($parts[3] == $checksum);
        } elseif (preg_match('~(^[KLMNPQRSW])(\d{7})([JABCDEFGHI]$)~', $cif, $parts)) {
            $control = 'JABCDEFGHI';
            $checksum = 0;
            foreach (str_split($parts[2]) as $pos => $val) {
                $checksum += array_sum(str_split($val * (2 - ($pos % 2))));
            }
            $checksum = substr($control, ((10 - ($checksum % 10)) % 10), 1);
            return ($parts[3] == $checksum);
        }
        return false;
    }
    private function validateNie($nif)
    {
        if (preg_match('/^[XYZT][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/', $nif)) {
            for ($i = 0; $i < 9; $i++) {
                $num[$i] = substr($nif, $i, 1);
            }

            if ($num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr(str_replace(array('X', 'Y', 'Z'), array('0', '1', '2'), $nif), 0, 8) % 23, 1)) {
                return true;
            } else {
                return false;
            }
        }
    }
    function validateNif($dni)
    {
        $str = trim($dni);
        $str = str_replace("-", "", $str);
        $str = str_ireplace(" ", "", $str);
        $n = substr($str, 0, strlen($str) - 1);
        $n = intval($n);
        if (!is_int($n)) {
            return 0;
        }
        $l = substr($str, -1);
        if (!is_string($l)) {
            return 0;
        }
        $letra = substr("TRWAGMYFPDXBNJZSQVHLCKE", $n % 23, 1);
        if (strtolower($l) == strtolower($letra)) {
            return $n . $l;
        } else {
            return 0;
        }
    }
}
