<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CasalInscripcioneRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CasalHistorialCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CasalHistorialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\CasalInscripcione::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/casalhistorial');
        CRUD::setEntityNameStrings('inscripcion', 'Historial inscripciones');
    }
    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'ver-datos-exta-inscripcion', 'ver-datos-exta-inscripcion', 'beginning');
        $this->crud->addButtonFromView('line', 'ver-ficha-meses', 'ver-ficha-meses', 'beginning');
     
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Fecha creacion',
        ]);
        $this->crud->addColumn([
            'name' => 'nombre',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'apellidos',
            'label' => 'Apellidos',
        ]);
        $this->crud->addColumn([
            'name' => 'nombre_titular',
            'label' => 'Nombre titular',
        ]);
        $this->crud->addColumn([
            'name' => 'validado',
            'label' => 'Validado',
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'nombre',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'apellidos',
                'label' => 'Apellidos',
                'type' => 'text',
            ],
            [
                'name' => 'adresa',
                'label' => 'Adresa',
                'type' => 'text',
            ],
            [
                'name' => 'poblacion',
                'label' => 'Poblacion',
                'type' => 'text',
            ],
            [
                'name' => 'codigo_postal',
                'label' => 'Codigo postal',
                'type' => 'text',
            ],
            [
                'name' => 'provincia',
                'label' => 'Provincia',
                'type' => 'text',
            ],
            [
                'name' => 'provincia',
                'label' => 'Provincia',
                'type' => 'text',
            ],
            [
                'name' => 'telefono_1',
                'label' => 'Telefono 1',
                'type' => 'text',
            ],
            [
                'name' => 'telefono_2',
                'label' => 'Telefono 2',
                'type' => 'text',
            ],
            [
                'name' => 'data_nacimiento',
                'label' => 'Data nacimiento',
                'type' => 'date',
            ],
            [
                'name' => 'n_cat_salut',
                'label' => 'Nº cat salut',
                'type' => 'text',
            ],
            [
                'name' => 'n_cuenta_bancaria',
                'label' => 'Nº cuenta bancaria',
                'type' => 'text',
            ],
            [
                'name' => 'nombre_titular',
                'label' => 'Nombre titular',
                'type' => 'text',
            ],
            [
                'name' => 'nif_titular',
                'label' => 'Nif titular',
                'type' => 'text',
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
            ],
            [
                'name' => 'validado',
                'label' => 'Validado',
                'type' => 'checkbox',
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CasalInscripcioneRequest::class);

        $this->basicFields();

    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    
}
